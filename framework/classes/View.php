<?php
class View
{
   public static function render($view, $data = [])
   {
      $d = to_object($data);
      if (!is_file(VIEWS . $view . 'View.php')) {
         die(sprintf('No se encuentra la vista "%sView".', $view));
      }
      require_once VIEWS . $view . 'View.php';
      return;
   }

   public static function echo_content($view)
   {
      if (!is_file(VIEWS . $view . 'View.php')) {
         die(sprintf('No se encuentra la vista "%sView".', $view));
      }
      $content = file_get_contents(VIEWS . $view . 'View.php');
      echo $content;
      return;
   }
}
