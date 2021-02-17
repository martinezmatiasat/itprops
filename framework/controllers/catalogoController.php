<?php
define('CONTR', 'catalogo/');

class catalogoController
{
   public function index()
   {
      go_to(CONTR.'zona');
      return;
   }

   public function zona()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'zonas');
      return;
   }

   public function partido()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'partidos');
      return;
   }

   public function barrio()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'barrios');
      return;
   }

   public function tipos_propiedades()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'tiposPropiedades');
      return;
   }

   public function estado_propiedad()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'estadosPropiedades');
      return;
   }

   public function tipo_operacion()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'tiposOperaciones');
      return;
   }

   public function caracteristicas()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'caracteristicas');
      return;
   }

   public function bloques()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'zona');
      return;
   }

   public function tipos_documentos()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'tiposDocumentos');
      return;
   }

   public function procedencias()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'procedencias');
      return;
   }

   public function tipos_tareas()
   {
      validate_loged_user();
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'tiposTareas');
      return;
   }
}