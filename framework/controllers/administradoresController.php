<?php

class administradoresController
{
   public function index()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render('administradores');
      return;
   }
}
