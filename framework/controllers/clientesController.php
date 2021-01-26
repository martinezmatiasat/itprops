<?php
define('CONTR', 'clientes/');

class clientesController
{
   public function index()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'clientes');
      return;
   }

   public function ver()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'verCliente');
      return;
   }

   public function editar()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'editarCliente');
      return;
   }
}
