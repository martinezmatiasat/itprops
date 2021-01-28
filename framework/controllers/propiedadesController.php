<?php
define('CONTR', 'propiedades/');

class propiedadesController
{
   public function index()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'propiedades');
      return;
   }

   public function importar()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'importarPropiedad');
      return;
   }

   public function exportar()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'exportarPropiedad');
      return;
   }

   public function nueva()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'nuevaPropiedad');
      return;
   }
}
