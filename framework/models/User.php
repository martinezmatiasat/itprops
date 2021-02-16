<?php
class User
{
   public $id = null;
   public $name = null;
   public $email = null;
   public $pass = null;

   function __construct($data = [])
   {
      if (isset($data['id'])) $this->id = $data['id'];
      if (isset($data['name'])) $this->name = $data['name'];
      if (isset($data['email'])) $this->email = $data['email'];
      if (isset($data['pass'])) $this->pass = $data['pass'];
   }

   public static function set_current_user($user_id, $user_name)
   {
      if (is_null($user_id)) return;
      $_SESSION['user']['id'] = $user_id;
      $_SESSION['user']['name'] = $user_name;
      return;
   }

   public static function unset()
   {
      if (isset($_SESSION['user'])) unset($_SESSION['user']);
      return;
   }

   public static function get_by_email($email)
   {
      $params = [
         'email' => $email
      ];
      $result = Factory::get('User', 'user', $params);
      return $result;
   }
}
