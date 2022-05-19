<?php
  class dolenciasClass{
    private $id_usupart;
    private $id_usu;
    private $id_parte;

    function __construct() { }

    public function getid_usupart(){ return $this->id_usupart; }
    public function setid_usupart($id_usupart){ $this->id_usupart = $id_usupart; }

    public function getid_usu(){ return $this->id_usu; }
    public function setid_usu($id_usu){ $this->id_usu = $id_usu; }

    public function getid_parte(){ return $this->id_parte; }
    public function setid_parte($id_parte){ $this->id_parte = $id_parte; }
  }
?>