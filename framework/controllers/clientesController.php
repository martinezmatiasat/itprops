<?php
define('CONTR', 'clientes/');

class clientesController
{
   public function index()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'clientes');
      return;
   }

   public function ver()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'verCliente');
      return;
   }

   public function editar()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'editarCliente');
      return;
   }
}
