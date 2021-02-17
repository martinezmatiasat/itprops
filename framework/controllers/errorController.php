<?php
class errorController
{
   function index()
   {
      $data = ['tittle' => 'Página no encontrada', 'bg' => 'dark'];
      View::render('404', $data);
   }
}
