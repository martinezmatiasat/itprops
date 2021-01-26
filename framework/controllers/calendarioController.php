<?php
define('CONTR', 'calendario/');

class calendarioController
{
   public function index()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'calendario');
      return;
   }
}