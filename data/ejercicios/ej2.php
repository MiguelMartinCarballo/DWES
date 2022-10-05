<?php
    $var1 = 5;
    $var2 = "7";
    //  $var2 = (int)"7";

    $var3 = (string)8;
    $var4 = "";
    $var5;

    echo "var1 es del tipo: " . gettype($var1);

    echo "<br> La variable 3 esta definida : ? " . isset($var3);
    echo "<br> La variable 4 esta definida : ? " . isset($var4);
    echo "<br> La variable 5 esta definida : ? " . isset($var5);

    echo "<br> La variable 5 esta vacía : ? " . empty($var5);
    echo "<br> La variable 3 esta vacía : ? " . empty($var3);
    echo "<br> La variable 4 esta vacía : ? " . empty($var4);


    const MICONST = 100;
    define('OTRACONST', 200);
    echo "<br> la constante es : " . MICONST;



    $num1 = 3;
    $num2 = "3";

    if($num1 == $num2){
        echo "<br> Son iguales";
    }else{
        echo "<br> Son diferentes";
    }

    if($num1 === $num2){
        echo "<br> Son iguales";
    }else{
        echo "<br> Son diferentes";
    }


    // comentario 1 líena
    /*
        variables: [A-Z, a-z, 0-9]
            - no pueden comenzar con numeros, ni caracteres especiales (ej. @ # ? -),
                excepto _ (con esto empiezan las variables predefinidas, no se recomiendo crear una empezando por _)

        -------------
        TIPOS DE DATOS:
            int, string, boolean, float
            arrays, objetos, ficheros

            Tipado de lenguaje de programación:
                - Fuerte: Java
                - Débil:  PHP

            gettype();

        ---------------
        OPERADORES  

        =, <, > ... !=, <>, ==, === (mismo valor y mismo tipo), <=> (-1 si menor, 0 si iguales, 1 si mayor)

        if(){} ; if(){}else{} ; if(){}elseif(){}else{}

        while(){} ; do{}while()
        
        for($i = 0 ; $i < 10 ; $i++){
            $miarray[$i];
        }

        foreach($array as $elemento){

        }


        Inclusión de código 

    */