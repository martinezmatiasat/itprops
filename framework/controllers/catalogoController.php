<?php
define('CONTR', 'catalogo/');

class catalogoController
{
   public function index()
   {
      validate_loged_user();
      $data = ['title' => 'Cat&aacute;logo'];
      View::render(CONTR . 'catalogo', $data);
   }

   public function zonas($action = null, $caract_id = null)
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      $empresa_id = $_COOKIE['empresa_id'];
      $data['zonas'] = Factory::select_list('Catalogo', 'catalogo', ["tipo = 1", "empresa_id IN (0, $empresa_id)"]);
      View::render(CONTR . 'zonas', $data);
      return;
   }

   public function partidos($action = null, $caract_id = null)
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      $empresa_id = $_COOKIE['empresa_id'];
      $data['zonas'] = Factory::select_list('Catalogo', 'catalogo', ["tipo = 2", "empresa_id IN (0, $empresa_id)"]);
      View::render(CONTR . 'partidos', $data);
      return;
   }

   public function barrios($action = null, $caract_id = null)
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      $empresa_id = $_COOKIE['empresa_id'];
      $data['zonas'] = Factory::select_list('Catalogo', 'catalogo', ["tipo = 3", "empresa_id IN (0, $empresa_id)"]);
      View::render(CONTR . 'barrios', $data);
      return;
   }

   public function tipos_propiedad($action = null, $caract_id = null)
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      $empresa_id = $_COOKIE['empresa_id'];
      $data['tiposPropiedad'] = Factory::select_list('Catalogo', 'catalogo', ["tipo = 4", "empresa_id IN (0, $empresa_id)"]);
      View::render(CONTR . 'tiposPropiedad', $data);
      return;
   }

   public function estados_propiedad($action = null, $caract_id = null)
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      $empresa_id = $_COOKIE['empresa_id'];
      $data['zonas'] = Factory::select_list('Catalogo', 'catalogo', ["tipo = 5", "empresa_id IN (0, $empresa_id)"]);
      View::render(CONTR . 'estadosPropiedad', $data);
      return;
   }

   public function tipos_operacion($action = null, $caract_id = null)
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      $empresa_id = $_COOKIE['empresa_id'];
      $data['tiposOperacion'] = Factory::select_list('Catalogo', 'catalogo', ["tipo = 6", "empresa_id IN (0, $empresa_id)"]);
      View::render(CONTR . 'tiposOperacion', $data);
      return;
   }

   public function caracteristicas($action = null, $caract_id = null)
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      $empresa_id = $_COOKIE['empresa_id'];
      //$caract_id = $_POST['action'];
      switch ($action) {
         case 'eliminar':
            if (Factory::delete('catalogo', ["catalogo_id = $caract_id", "empresa_id = $empresa_id"])) {
               Alert::throw_msg('Caracter&iacute;stica eliminada', 'success');
            } else {
               Alert::throw_msg('Disculpanos, no se pudo completar la operaci&oacute;n', 'danger');
            }
            break;
      }
      $data['caracteristicas'] = Factory::select_list('Catalogo', 'catalogo', ["tipo = 7", "empresa_id IN (0, $empresa_id)"]);
      $data['title'] = "Caracter&iacute;sticas";
      View::render(CONTR . 'caracteristicas', $data);
      return;
   }

   public function bloques_info($action = null, $caract_id = null)
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      View::render(CONTR . 'bloquesInfo');
      return;
   }

   public function tipos_documento($action = null, $caract_id = null)
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      $empresa_id = $_COOKIE['empresa_id'];
      $data['tiposDocumento'] = Factory::select_list('Catalogo', 'catalogo', ["tipo = 8", "empresa_id IN (0, $empresa_id)"]);
      View::render(CONTR . 'tiposDocumento', $data);
      return;
   }

   public function procedencias($action = null, $caract_id = null)
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      $empresa_id = $_COOKIE['empresa_id'];
      $data['procedencias'] = Factory::select_list('Catalogo', 'catalogo', ["tipo = 9", "empresa_id IN (0, $empresa_id)"]);
      View::render(CONTR . 'procedencias', $data);
      return;
   }

   public function tipos_tarea($action = null, $caract_id = null)
   {
      validate_loged_user();
      if (empty($_POST["action"])) Redirect::to('catalogo');
      $empresa_id = $_COOKIE['empresa_id'];
      $data['tiposTarea'] = Factory::select_list('Catalogo', 'catalogo', ["tipo = 10", "empresa_id IN (0, $empresa_id)"]);
      View::render(CONTR . 'tiposTarea', $data);
      return;
   }
}
