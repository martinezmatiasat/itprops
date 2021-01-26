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
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'zonas');
      return;
   }

   public function partido()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'partidos');
      return;
   }

   public function barrio()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'barrios');
      return;
   }

   public function tipos_propiedades()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'tiposPropiedades');
      return;
   }

   public function estado_propiedad()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'estadosPropiedades');
      return;
   }

   public function tipo_operacion()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'tiposOperaciones');
      return;
   }

   public function caracteristicas()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'caracteristicas');
      return;
   }

   public function bloques()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'zona');
      return;
   }

   public function tipos_documentos()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'tiposDocumentos');
      return;
   }

   public function procedencias()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'procedencias');
      return;
   }

   public function tipos_tareas()
   {
      //if (!isset($_SESSION['user'])) go_to('login');
      //$data = ['title' => 'Home', 'bg' => 'dark'];
      View::render(CONTR.'tiposTareas');
      return;
   }
}