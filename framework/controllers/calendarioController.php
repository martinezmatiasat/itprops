<?php
define('CONTR', 'calendario/');

class calendarioController
{
   public function index()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'calendario');
      return;
   }
}