<?php
define('CONTR', 'test/');

class testController
{
   function index()
   {
      Notification::sendEmail('a', 'a', 'a');
   }
}
