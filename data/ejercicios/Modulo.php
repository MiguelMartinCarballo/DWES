<?php

class Modulo extends Asignatura
{
    private $codigo = null;

    
    function __construct($nombre, $numerocreditos, $codigo)
    {
        parent::__construct($nombre, $numerocreditos);
        $this->codigo = $codigo;
    }

    function getCodigo()
    {
        return $this->codigo;
    }

    function setCodigo($nuevocod)
    {
        return $this->codigo = $nuevocod;
    }

    function __toString()
    {
        return "<br><b> Datos del modulo :</b><br> "
        . "<br> Nombre dl modulo : " . $this->getNombre()
        . "<br> Numero creditos : " . $this->getNumeroCreditos()
        . "<br> Codigo del modulo : " . $this->codigo;
    }
}
