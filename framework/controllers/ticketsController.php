<?php

class ticketsController
{
   public function index()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render('tickets');
      return;
   }

}