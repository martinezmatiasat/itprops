<?php
class Catalogo
{
   private $catalogo_id = null;
   private $empresa_id = null;
   private $tipo = null;
   private $nombre = null;
   private $extra = null;
   private $extra2 = null;
   private $catalogo_original = null;
   private $descripcion = null;
   private $eliminado = null;

   function __construct($data = [])
   {
      if (isset($data['catalogo_id']))       $this->catalogo_id = $data['catalogo_id'];
      if (isset($data['empresa_id']))        $this->empresa_id = $data['empresa_id'];
      if (isset($data['tipo']))              $this->tipo = $data['tipo'];
      if (isset($data['nombre']))            $this->nombre = $data['nombre'];
      if (isset($data['extra']))             $this->extra = $data['extra'];
      if (isset($data['extra2']))            $this->extra2 = $data['extra2'];
      if (isset($data['catalogo_original'])) $this->catalogo_original = $data['catalogo_original'];
      if (isset($data['descripcion']))       $this->descripcion = $data['descripcion'];
      if (isset($data['eliminado']))         $this->eliminado = $data['eliminado'];
   }

   function getCatalogoId()       { return $this->catalogo_id; }
   function getEmpresaId()        { return $this->empresa_id; }
   function getTipo()             { return $this->tipo; }
   function getNombre()           { return $this->nombre; }
   function getExtra()            { return $this->extra; }
   function getExtra2()           { return $this->extra2; }
   function getCatalogoOriginal() { return $this->catalogo_original; }
   function getDescripcion()      { return $this->descripcion; }
   function getEliminado()        { return $this->eliminado; }

   function setCatalogoId($data)       { $this->catalogo_id = $data; }
   function setEmpresaId($data)        { $this->empresa_id = $data; }
   function setTipo($data)             { $this->tipo = $data; }
   function setNombre($data)           { $this->nombre = $data; }
   function setExtra($data)            { $this->extra = $data; }
   function setExtra2($data)           { $this->extra2 = $data; }
   function setCatalogoOriginal($data) { $this->catalogo_original = $data; }
   function setDescripcion($data)      { $this->descripcion = $data; }
   function setEliminado($data)        { $this->eliminado = $data; }
}