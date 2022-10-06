<?php
/*
        CONCEPTOS GENERALES:
        - Sobrescritura (metodos)
            -> mismo nombre con mismo numero de parametros
                ej. 
                    - Clase figura -> metodo calcular_area
                    - Clase circulo -> metodo calcular_area
                    - Clase cuadrado -> metodo calcular_area
        - Sobrecarga (metodos)
            -> mismo nombre con diferente numero de parametros
        
        - Sobrecarga (constructores)
            -> diferentes constructores con el mismo nombre y diferentes parametros

        - Polimorfismo
            -> objeto que se comporta como otro objeto.
                - casting
                - sobrescritura
                - sobrecarga
                - ligadura dinamica


        PHP:
        - Si sobrescritura
        - No existe sobrecarga
        - No hay sobrecarga de constructores
        - Si hay polimorfismo
        - public, private, protected. Por defecto public

        NOTACION:
        - Nombre clases: UpperCamelCase (PascalCase)
        - Nombre metodos: lowerCamelCase
    */


class Asignatura
{
    private $nombre = null;
    private $numcreditos = null;
    private static $ciclo = null;

    public function __construct($nombre, $numcreditos)
    {
        $this->nombre = $nombre;
        $this->numcreditos = $numcreditos;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function setNombre($nnombre)
    {
        $this->nombre = $nnombre;
    }

    function getNumeroCreditos()
    {
        return $this->numcreditos;
    }

    function setNumeroCreditos($numcredit)
    {
        $this->numcreditos = $numcredit;
    }

    static function getCiclo(){
        return self::$ciclo;
    }

    static function setCiclo($nomciclo){
        self::$ciclo = $nomciclo;
    }

    function __toString()
    {
        return "<br><b> Datos de la asignatura : </b><br>"
        . "<br> Nombre asignatura : " . $this->nombre
        . "<br> Numero creditos : " . $this->numcreditos;

    }
}
