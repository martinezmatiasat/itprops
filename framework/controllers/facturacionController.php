<?php

class facturacionController
{
   public function index()
   {
      go_to('facturacion/facturas');
   }

   public function facturas()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render('facturas');
      return;
   }

   public function datos()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render('facturacionDatos');
      return;
   }

   public function algo() {

   }
}