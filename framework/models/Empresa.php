<?php
class Empresa
{
   private $empresa_id = null;
   private $nombre = null;
   private $apellido = null;
   private $email = null;
   private $razon_social = null;
   private $direccion_id = null;
   private $estado = null;
   private $paquete_id = null;
   private $descuento_fin = null;
   private $fin_demo = null;
   private $fecha_alta = null;
   private $fecha_baja = null;
   private $extra_key = null;
   private $notas = null;
   private $fecha_fin = null;

   function __construct()
   {
      if (isset($data['empresa_id'])) $this->empresa_id = $data['empresa_id'];
      if (isset($data['nombre'])) $this->nombre = $data['nombre'];
      if (isset($data['apellido'])) $this->apellido = $data['apellido'];
      if (isset($data['email'])) $this->email = $data['email'];
      if (isset($data['razon_social'])) $this->razon_social = $data['razon_social'];
      if (isset($data['direccion_id'])) $this->direccion_id = $data['direccion_id'];
      if (isset($data['estado'])) $this->estado = $data['estado'];
      if (isset($data['paquete_id'])) $this->paquete_id = $data['paquete_id'];
      if (isset($data['descuento_fin'])) $this->descuento_fin = $data['descuento_fin'];
      if (isset($data['fin_demo'])) $this->fin_demo = $data['fin_demo'];
      if (isset($data['fecha_alta'])) $this->fecha_alta = $data['fecha_alta'];
      if (isset($data['fecha_baja'])) $this->fecha_baja = $data['fecha_baja'];
      if (isset($data['extra_key'])) $this->extra_key = $data['extra_key'];
      if (isset($data['notas'])) $this->notas = $data['notas'];
      if (isset($data['fecha_fin'])) $this->fecha_fin = $data['fecha_fin'];
   }

   function getEmpresaId() { return $this->empresa_id; }
   function getNombre() { return $this->nombre; }
   function getApellido() { return $this->apellido; }
   function getEmail() { return $this->email; }
   function getRazonSocial() { return $this->razon_social; }
   function getDireccionId() { return $this->direccion_id; }
   function getEstado() { return $this->estado; }
   function getPaqueteId() { return $this->paquete_id; }
   function getDescuentoFin() { return $this->descuento_fin; }
   function getFinDemo() { return $this->fin_demo; }
   function getFechaAlta() { return $this->fecha_alta; }
   function getFechaBaja() { return $this->fecha_baja; }
   function getExtraKey() { return $this->extra_key; }
   function getNotas() { return $this->notas; }
   function getFechaFin() { return $this->fecha_fin; }

   function setEmpresaId($data) { $this->empresa_id = $data; }
   function setNombre($data) { $this->nombre = $data; }
   function setApellido($data) { $this->apellido = $data; }
   function setEmail($data) { $this->email = $data; }
   function setRazonSocial($data) { $this->razon_social = $data; }
   function setDireccionId($data) { $this->direccion_id = $data; }
   function setEstado($data) { $this->estado = $data; }
   function setPaqueteId($data) { $this->paquete_id = $data; }
   function setDescuentoFin($data) { $this->descuento_fin = $data; }
   function setFinDemo($data) { $this->fin_demo = $data; }
   function setFechaAlta($data) { $this->fecha_alta = $data; }
   function setFechaBaja($data) { $this->fecha_baja = $data; }
   function setExtraKey($data) { $this->extra_key = $data; }
   function setNotas($data) { $this->notas = $data; }
   function setFechaFin($data) { $this->fecha_fin = $data; }

   
}