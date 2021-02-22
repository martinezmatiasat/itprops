<?php

// Primera función de prueba custom
function en_custom()
{
   return 'ESTOY DENTRO DE CUSTOM_FUNCTIONS.';
}

function enabled_company($company_id)
{
   $result = false;
   $enabled = Factory::exists('empresa', ['empresa_id' => $company_id, 'estado' => 1]);
   if ($enabled) $result = true;
   return $result;
}
