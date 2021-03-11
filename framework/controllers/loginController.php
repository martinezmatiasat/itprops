<?php
define('CONTR', 'login/');

class loginController
{
   function index()
   {
      if (isset($_COOKIE['admin']) || isset($_COOKIE['empresa'])) {
         Redirect::to('propiedades');
      }
      View::render(CONTR . 'login');
   }

   function login()
   {
      if (isset($_COOKIE['admin']) || isset($_COOKIE['empresa'])) {
         Redirect::to('propiedades');
      }

      if (empty($_POST['email']) || empty($_POST['pass'])) {
         $mensaje = 'Falta completar datos';
      } else {
         $admin = Factory::get('Administrador', 'administrador', ['email' => $_POST['email']]);
         if (!$admin || $admin->getClave() != sha1($_POST['pass'])) {
            $mensaje = 'Identificaci&oacute;n incorrecta';
         } else {
            if (!enabled_company($admin->getEmpresaId())) {
               $mensaje = 'Su empresa no est&aacute; habilitada para operar';
            } elseif ($admin->getEstado() == 0) {
               $mensaje = 'Su usuario no est&aacute; habilitado para operar';
            } elseif ($admin->getEstado() == 2) {
               $id = $admin->getAdministradorId();
               Redirect::to("login/change_pass/$id");
            } else {
               $ip = getRealIpAddr();
               Factory::insert_array(
                  "administrador_acceso",
                  [
                     "administrador_id" => $admin->getAdministradorId(),
                     "fecha_entrada" => date("Y/m/d H:i:s", time()),
                     "fecha_salida" => null,
                     "ip" => $ip,
                     "session_id" => session_id()
                  ]
               );
               setcookie("session_id", session_id(), time() + 60 * 60 * 72, '/');
               setcookie("admin_id", $admin->getAdministradorId(), time() + 60 * 60 * 72, '/');
               setcookie("empresa_id", $admin->getEmpresaId(), time() + 60 * 60 * 72, '/');
               Redirect::to('propiedades');
            }
         }
      }

      if (isset($mensaje)) Alert::throw_msg($mensaje, 'danger');
      Redirect::to('login');
   }

   function logout()
   {
      if (isset($_COOKIE['session_id'])) {
         Factory::update_array(
            "administrador_acceso",
            ["fecha_salida" => date("Y/m/d H:i:s", time())],
            ["`session_id` = " . "'" . $_COOKIE['session_id'] . "'"]
         );
      }
      session_unset();
      session_destroy();
      session_write_close();
      setcookie(session_name(), null, time() - 3600 * 24, '/');
      setcookie("admin_id", null, time() - 3600 * 24, "/");
      setcookie("empresa_id", null, time() - 3600 * 24, "/");
      Redirect::to('login');
   }

   function forgot_pass()
   {
      if (isset($_COOKIE['admin']) || isset($_COOKIE['empresa'])) {
         Redirect::to('propiedades');
      }

      if (isset($_POST['email'])) {
         $admin = Factory::get('Administrador', 'administrador', ['email' => $_POST['email']]);
         if (!$admin) {
            Alert::throw_msg('Este email no está registrado', 'danger');
            View::render(CONTR . 'olvideClave');
         }
         if ($admin->getEstado() == 0) {
            Alert::throw_msg('El usuario no está activo', 'danger');
            View::render(CONTR . 'olvideClave');
         }
         $prov_pass = random_string(8);
         $admin->setClave(sha1($prov_pass));
         $admin->setEstado(2);
         $id = $admin->getAdministradorId();
         $company = Factory::get('Empresa', 'empresa', ['empresa_id' => $admin->getEmpresaId()]);
         if ($company->getEstado() != 0 && $company->getEstado() != 1) {
            Alert::throw_msg('La empresa no está activa', 'danger');
            View::render(CONTR . 'olvideClave');
         }
         Factory::update_object('administrador', $admin, ["administrador_id = $id"]);
         Alert::throw_msg($prov_pass, 'danger');
         /*
         Notification::send(
            1, 
            $_POST['email'], 
            ['##RAZON##', '##NOMBRE##', '##EMAIL##', '##CLAVE##'], 
            [$company->getRazonSocial(), $admin->getNombre(), $admin->getEmail(), $admin->getClave()]
         );
         */
         Redirect::to('login');
      }
      View::render(CONTR . 'olvideClave');
   }

   function change_pass($admin_id = null)
   {
      if (isset($_COOKIE['admin']) || isset($_COOKIE['empresa'])) {
         Redirect::to('propiedades');
      }

      if (isset($_POST['actual']) && isset($_POST['nueva'])) {
         if ($_POST['nueva'] != $_POST['confirma']) {
            Alert::throw_msg('Las claves no coinciden', 'danger');
         } else {
            $clave = sha1($_POST['nueva']);
            Factory::update_array('administrador', ['clave' => $clave, 'estado' => 1], ["administrador_id = $admin_id"]);
            Redirect::to('login');
         }
      }

      View::render(CONTR . 'cambiarClave', ['administrador_id' => $admin_id]);
   }
}
