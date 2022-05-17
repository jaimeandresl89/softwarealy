<?php

class recomendacionesClass
{

    private $id_recomendacion;
    private $recomendacion;
    private $enlace;
    private $id_parte;

    function __construct()
    {
    }

    public function getId_recomendacion()
    {
        return $this->id_recomendacion;
    }

    public function getRecomendacion()
    {
        return $this->recomendacion;
    }

    public function getEnlace()
    {
        return $this->enlace;
    }

    public function getId_parte()
    {
        return $this->id_parte;
    }

    public function setId_recomendacion($id_recomendacion)
    {
        $this->id_recomendacion = $id_recomendacion;
    }

    public function setRecomendacion($recomendacion)
    {
        $this->recomendacion = $recomendacion;
    }

    public function setEnlace($enlace)
    {
        $this->enlace = $enlace;
    }

    public function setId_parte($id_parte)
    {
        $this->id_parte = $id_parte;
    }
}
