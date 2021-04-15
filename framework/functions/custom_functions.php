<?php

// Primera función de prueba custom
function en_custom()
{
   return 'ESTOY DENTRO DE CUSTOM_FUNCTIONS.';
}

function enabled_company($company_id)
{
   $result = false;
   $active = Factory::exists('empresa', ['empresa_id' => $company_id, 'estado' => 1]);
   $free = Factory::exists('empresa', ['empresa_id' => $company_id, 'estado' => 0]);
   if ($active || $free) $result = true;
   return $result;
}

/**
200 OK
201 Created
300 Multiple Choices
301 Moved Permanently
302 Found
304 Not Modified
307 Temporary Redirect
400 Bad Request
401 Unauthorized
403 Forbidden
404 Not Found
410 Gone
500 Internal Server Error
501 Not Implemented
503 Service Unavailable
550 Permission denied
 */
function json_build($status = 200, $data = null, $msg = '')
{
   if (empty($msg) || $msg == '') {
      switch ($status) {
         case 200:
            $msg = 'OK';
            break;
         case 201:
            $msg = 'Created';
            break;
         case 400:
            $msg = 'Invalid request';
            break;
         case 403:
            $msg = 'Access denied';
            break;
         case 404:
            $msg = 'Not found';
            break;
         case 500:
            $msg = 'Internal Server Error';
            break;
         case 550:
            $msg = 'Permission denied';
            break;
         default:
            break;
      }
   }

   $json =
      [
         'status' => $status,
         'data'   => $data,
         'msg'    => $msg
      ];

   return json_encode($json);
}

function json_output($json)
{
   header('Access-Control-Allow-Origin: *');
   header('Content-Type: application/json;charset=utf-8');

   if (is_array($json)) {
      $json = json_encode($json);
   }

   echo $json;
   exit();
}
