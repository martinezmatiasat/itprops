<?php
define('CONTR', 'catalogo/');

class catalogoController
{
   public function index()
   {
      validate_loged_user();
      /*
      if (isset($_POST["action"])) {
         switch ($_POST["action"]) {
            case 'tipos-propiedad':
               $template = "tiposPropiedad";
               break;

            case 'tipos-operacion':
               $template = "tiposOperacion";
               break;

            case 'caracteristicas':
               $template = "caracteristicas";
               break;

            case 'tipos-documento':
               $template = "tiposDocumento";
               break;

            case 'bloques-info':
               $template = "bloquesInfo";
               break;

            case 'procedencias':
               $template = "procedencias";
               break;

            case 'tipos-tarea':
               $template = "tiposTarea";
               break;

            default:
               $template = "zonas";
               break;
         }
         View::render(CONTR . $template);
         return;
      }
      */
      $data = ['title' => 'Cat&aacute;logo'];
      View::render(CONTR . 'catalogo', $data);
   }


   public function zonas()
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      $data = ['title' => 'Cat&aacute;logo', 'bg' => 'dark'];
      View::render(CONTR . 'zonas', $data);
      return;
   }

   public function partidos()
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR . 'partidos');
      return;
   }

   public function barrios()
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR . 'barrios');
      return;
   }

   public function tipos_propiedad()
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR . 'tiposPropiedad');
      return;
   }

   public function estados_propiedad()
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR . 'estadosPropiedad');
      return;
   }

   public function tipos_operacion()
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR . 'tiposOperacion');
      return;
   }

   public function caracteristicas($action = null, $caract_id = null)
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      $empresa_id = $_COOKIE['empresa_id'];
      $caract_id = $_POST['action'];
      switch ($action) {
         case 'eliminar':
            if (Factory::delete('catalogo', ["catalogo_id = $caract_id", "empresa_id = $empresa_id"])) {
               Alert::throw_msg('Caracter&iacute;stica eliminada', 'success');
            } else {
               Alert::throw_msg('Disculpanos, no se pudo completar la operaci&oacute;n', 'danger');
            }
            break;

         default:

            break;
      }
      $data['caracteristicas'] = Factory::select_list('Catalogo', 'catalogo', ["tipo = 7", "empresa_id IN (0, $empresa_id)"]);
      $data['title'] = "Caracter&iacute;sticas";
      View::render(CONTR . 'caracteristicas', $data);
      return;
   }

   public function bloques_info()
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR . 'bloquesInfo');
      return;
   }

   public function tipos_documento()
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR . 'tiposDocumento');
      return;
   }

   public function procedencias()
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR . 'procedencias');
      return;
   }

   public function tipos_tarea()
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR . 'tiposTarea');
      return;
   }
}
