<?php

class Notification
{
   private $type = null;
   private $subject = null;
   private $message = null;

   function __construct($data = [])
   {
      if (isset($data['type'])) $this->type = $data['type'];
      if (isset($data['subject'])) $this->subject = $data['subject'];
      if (isset($data['message'])) $this->email = $data['message'];
   }

   function getType()
   {
      return $this->type;
   }
   function getSubject()
   {
      return $this->subject;
   }
   function getMessage()
   {
      return $this->message;
   }

   function setType($type)
   {
      $this->type = $type;
   }
   function setSubject($subject)
   {
      $this->subject = $subject;
   }
   function setMessage($message)
   {
      $this->message = $message;
   }

   public static function send($type, $email, $search, $replace, $files = array())
   {
      $notification = Factory::get('Notification', 'notificacion', ['tipo' => $type]); ///Busco la notificacion en la base de datos segun el tipo		
      if (!$notification) return false;
      
      $content = file_get_contents(INCLUDES . 'email-inlined.html'); ///Levanto un template del HTML a enviar
      $msg = str_replace('###CONTENT###', $notification->getMessage(), $content); ///Reemplazo la variable CONTENT (que esta en el template) con el mensaje de la notificacion
      $notification->setMessage(str_replace($search, $replace, $msg)); ///Reemplazo las variables que estan en la notificacion con los datos del cliente + clave + etc
      sendEmail($email, $notification->getSubject(), $notification->getMessage(), $files); ////LLamo a la funcion anterior
   }
}
