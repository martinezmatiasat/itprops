<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Notification
{
   private $type = null;
   private $subject = null;
   private $message = null;

   function __construct($data = [])
   {
      if (isset($data['tipo'])) $this->type = $data['tipo'];
      if (isset($data['asunto'])) $this->subject = $data['asunto'];
      if (isset($data['mensaje'])) $this->message = $data['mensaje'];
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
   
   public static function init_module($n)
   {
      $sql = "SELECT * FROM extra_variables WHERE module = $n";
      try {
         $result = Db::query($sql);
         return $result;
      } catch (Exception $e) {
         return $e->getMessage();
      }
   }

   public static function define_const($module)
   {
      $data = self::init_module($module);
      foreach ($data as $d) {
         define($d['name'], $d['value']);
      }
      return;
   }

   public static function send($type, $email, $search, $replace, $files = array())
   {
      $notification = Factory::get('Notification', 'notificacion', ['tipo' => $type]); ///Busco la notificacion en la base de datos segun el tipo		
      if (!$notification) return false;

      $content = file_get_contents(INCLUDES . 'email-inlined.html'); ///Levanto un template del HTML a enviar
      $msg = str_replace('###CONTENT###', $notification->getMessage(), $content); ///Reemplazo la variable CONTENT (que esta en el template) con el mensaje de la notificacion
      $notification->setMessage(str_replace($search, $replace, $msg)); ///Reemplazo las variables que estan en la notificacion con los datos del cliente + clave + etc
      self::sendEmail($email, $notification->getSubject(), $notification->getMessage(), $files); ////LLamo a la funcion anterior
      return true;
   }

   public static function sendEmail($to, $subject, $content, $files = array(), $debug = false)
   {
      require dirname(__FILE__).'/../../sdk/PHPMailer/src/PHPMailer.php';
      require dirname(__FILE__).'/../../sdk/PHPMailer/src/Exception.php';
      require dirname(__FILE__).'/../../sdk/PHPMailer/src/SMTP.php';

      try {
         self::define_const(1);
         $mail = new PHPMailer();
         $mail->From = NO_REPLY_EMAIL;
         $mail->FromName = NO_REPLY_NAME;
         $tos = explode(',', $to);
         foreach ($tos as $to) $mail->AddAddress($to);
         $mail->IsHTML(true);
         $mail->Subject = $subject;
         $mail->Body = $content;
         foreach ($files as $name => $file) {
            if (file_exists($ticket)) $mail->addStringAttachment(file_get_contents($file), $name);
         }

         if (SMAIL_SMTP) {
            $mail->IsSMTP();
            $mail->Host = SMAIL_HOST;
            $mail->Port = SMAIL_PORT;
            $mail->SMTPAuth = SMAIL_AUTH ? true : false;
            if ($mail->SMTPAuth) {
               $mail->Username = SMAIL_USERNAME;
               $mail->Password = SMAIL_PASSWORD;
            }
            if (SMAIL_SECURE && SMAIL_SECURE != '') $mail->SMTPSecure = SMAIL_SECURE;
            if ($debug) $mail->SMTPDebug = 6;

            ///DESCOMENTAR SI DA ERROR DE VERIFICACION DE SSL
            $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
         }
         
         $mail->Send();
         Alert::throw_msg('Enviada con &eacute;xito', 'success');
      } catch (Exception $e) {
         Alert::throw_msg("Disculpanos. No se pudo enviar: {$mail->ErrorInfo}", 'danger');
      }
   }
}