<?php
define('CONTR', 'oportunidades/');

class oportunidadesController
{
   public function index()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'oportunidades');
      return;
   }

   public function editar()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'editarOportunidad');
      return;
   }

   public function editarFlujo()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'editarFlujo');
      return;
   }

   public function flujos($action = '')
   {  
      if ($action && $action == 'editar') Redirect::to('oportunidades/editarFlujo');
      validate_loged_user();
      View::render(CONTR.'flujos');
      return;
   }

   public function tarea()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'tareaOportunidad');
      return;
   }

   public function historial()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'historialOportunidad');
      return;
   }
}