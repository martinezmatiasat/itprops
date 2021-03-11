<?php
class Administrador
{
   private $administrador_id = null;
   private $empresa_id = null;
   private $nombre = null;
   private $apellido = null;
   private $nombre_chat = null;
   private $email = null;
   private $clave = null;
   private $notas = null;
   private $en_linea = null;
   private $rol_id = null;
   private $fecha_creacion = null;
   private $estado = null;

   function __construct($data = [])
   {
      if (isset($data['administrador_id'])) $this->administrador_id = $data['administrador_id'];
      if (isset($data['empresa_id'])) $this->empresa_id = $data['empresa_id'];
      if (isset($data['nombre'])) $this->nombre = $data['nombre'];
      if (isset($data['apellido'])) $this->apellido = $data['apellido'];
      if (isset($data['nombre_chat'])) $this->nombre_chat = $data['nombre_chat'];
      if (isset($data['email'])) $this->email = $data['email'];
      if (isset($data['clave'])) $this->clave = $data['clave'];
      if (isset($data['notas'])) $this->notas = $data['notas'];
      if (isset($data['en_linea'])) $this->en_linea = $data['en_linea'];
      if (isset($data['rol_id'])) $this->rol_id = $data['rol_id'];
      if (isset($data['fecha_creacion'])) $this->fecha_creacion = $data['fecha_creacion'];
      if (isset($data['estado'])) $this->estado = $data['estado'];
   }

   function getAdministradorId() { return $this->administrador_id; }
   function getEmpresaId() { return $this->empresa_id; }
   function getNombre() { return $this->nombre; }
   function getApellido() { return $this->apellido; }
   function getNombreChat() { return $this->nombre_chat; }
   function getEmail() { return $this->email; }
   function getClave() { return $this->clave; }
   function getNotas() { return $this->notas; }
   function getEnLinea() { return $this->en_linea; }
   function getRolId() { return $this->rol_id; }
   function getFechaCreacion() { return $this->fecha_creacion; }
   function getEstado() { return $this->estado; }

   function setAdministradorId($data) { $this->administrador_id = $data; }
   function setEmpresaId($data) { $this->empresa_id = $data; }
   function setNombre($data) { $this->nombre = $data; }
   function setApellido($data) { $this->apellido = $data; }
   function setNombreChat($data) { $this->nombre_chat = $data; }
   function setEmail($data) { $this->email = $data; }
   function setClave($data) { $this->clave = $data; }
   function setNotas($data) { $this->notas = $data; }
   function setEnLinea($data) { $this->en_linea = $data; }
   function setRolId($data) { $this->rol_id = $data; }
   function setFechaCreacion($data) { $this->fecha_creacion = $data; }
   function setEstado($data) { $this->estado = $data; }

   public static function set_current_admin($administrador_id, $nombre)
   {
      if (is_null($administrador_id)) return;
      $_SESSION['admin']['id'] = $administrador_id;
      $_SESSION['admin']['nombre'] = $nombre;
      return;
   }

   public static function unset_current_admin()
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
