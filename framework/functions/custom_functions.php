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
