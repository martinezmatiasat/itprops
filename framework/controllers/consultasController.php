<?php
define('CONTR', 'consultas/');

class consultasController
{
   public function index()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'consultas');
      return;
   }
}