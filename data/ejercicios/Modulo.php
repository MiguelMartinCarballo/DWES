<?php

    /*
        - interfaces, clases abstract
        - objtos
        - polimorfismo: sobreescritura de metodos
        - sobrecarga de metodos NO
        - sobrecarga de constructores NO
        - herencia unica -> extends
        - invocar "algo" del padre: parent::
        - $this->metodo
        - $this->atributo
        - static contador;
            -> acceso a elemento estático dentro de la clase: self::
            -> pertenece a la clase, no al objeto
    */

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
