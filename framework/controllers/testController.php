<?php
define('CONTR', 'test/');

class testController
{
   function index()
   {
      Notification::send(
         1,
         'test@gmail.com',
         ['##RAZON##', '##NOMBRE##', '##EMAIL##', '##CLAVE##'],
         ['test', 'test', 'test', 'test']
      );
   }
}
