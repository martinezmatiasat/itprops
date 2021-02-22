<?php
define('CONTR', 'login/');

class loginController
{
   function index()
   {
      if (isset($_COOKIE['admin']) || isset($_COOKIE['empresa'])) {
         go_to('propiedades');
      }
      View::render(CONTR . 'login');
   }

   function login()
   {
      if (isset($_COOKIE['admin']) || isset($_COOKIE['empresa'])) {
         go_to('propiedades');
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
            } elseif ($admin->getEliminado() != 0) {
               $mensaje = 'Su usuario no est&aacute; habilitado para operar';
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
               go_to('propiedades');
            }
         }
      }

      if (isset($mensaje)) Alert::throw_msg($mensaje, 'danger');
      go_to('login');
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
      go_to('login');
   }

   function forgot_pass()
   {
      if (isset($_POST['email'])) {
         $prov_pass = random_string(8);
         $admin = Factory::get('Administrador', 'administrador', ['email' => $_POST['email']]);
         Alert::throw_msg($_POST['email'], 'success');
         View::render(CONTR . 'olvideClave');
      }
      View::render(CONTR . 'olvideClave');
      return;
   }
}
