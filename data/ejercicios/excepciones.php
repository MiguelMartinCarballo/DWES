<?php

    include_once "manejadorexcepcion.php";

    //calcula el inverso del numero pasado como parametro
    function inverso($num){

        if($num == 0){
            throw new MiExcepcion("No se puede dividir por 0");
        }

        return 1/$num;
    }

    try{
        echo "<br>El inverso de 5 es : " . inverso(5);
    }catch(MiExcepcion $e){
        echo "<br>La razon de la excepcion es : " . $e->errorPersonalizado();
    }finally{
        echo "<br>Esto siempre se ejecuta";
    }

    try{
        echo "<br>El inverso de 0 es : " . inverso(0);
    }catch(MiExcepcion $e){
        echo "<br>La razon de la excepcion es : " . $e->errorPersonalizado();
    }finally{
        echo "<br>Esto siempre se ejecuta";
    }