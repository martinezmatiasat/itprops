<?php

class configuracionController
{
   public function index()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render('configuracion/general');
      return;
   }

   public function sucursales()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render('configuracion/sucursales');
      return;
   }

   public function sincronizacion()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render('configuracion/sincronizacion');
      return;
   }

   public function api()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render('configuracion/api');
      return;
   }

   public function datos()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render('configuracion/datos');
      return;
   }

   public function general()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render('configuracion/general');
      return;
   }

   public function app()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render('configuracion/app');
      return;
   }

   public function ficha()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render('configuracion/ficha');
      return;
   }

   public function cartelera()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render('configuracion/cartelera');
      return;
   }
}