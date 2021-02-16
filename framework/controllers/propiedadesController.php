<?php
define('CONTR', 'propiedades/');

class propiedadesController
{
   public function index()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'propiedades');
      return;
   }

   public function importar()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'importarPropiedad');
      return;
   }

   public function exportar()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'exportarPropiedad');
      return;
   }

   public function nueva()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'nuevaPropiedad');
      return;
   }
}
