<?php

class facturacionController
{
   public function index()
   {
      go_to('facturacion/facturas');
   }

   public function facturas()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render('facturas');
      return;
   }

   public function datos()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render('facturacionDatos');
      return;
   }
}