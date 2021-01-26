<?php
define('CONTR', 'oportunidades/');

class oportunidadesController
{
   public function index()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'oportunidades');
      return;
   }

   public function editar()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'editarOportunidad');
      return;
   }

   public function editarFlujo()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'editarFlujo');
      return;
   }

   public function flujos($action = '')
   {  
      if ($action && $action == 'editar') go_to('oportunidades/editarFlujo'); 
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'flujos');
      return;
   }

   public function tarea()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'tareaOportunidad');
      return;
   }

   public function historial()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'historialOportunidad');
      return;
   }
}