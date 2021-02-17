<?php
define('CONTR', 'dashboard/');

class dashboardController
{
   public function index()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'dashboard');
      return;
   }
}
