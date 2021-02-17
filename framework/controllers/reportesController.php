<?php

class reportesController
{
   public function index()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render('reportes');
      return;
   }

}