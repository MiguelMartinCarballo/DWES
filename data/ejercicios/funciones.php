<?php

    //globales
    $var1 = 6;
    $var2 = 7;

    function suma($a, $b){
        global $var1, $var2;
        $var1 = 99;
        $var2 = 100;
        echo "<br>La variable dentro de la funcion var1 y var2 son : " . $var1 . " y " . $var2;
        
        //definición variable estática
        static $varestatica = 0;
        echo "<br>El valor de la variable estática es : " . $varestatica;
        $varestatica++;
        
        return $a + $b;
    }

    echo "<br>La variable fuera de la funcion var1 y var2 son : " . $var1 . " y " . $var2;

    echo "<br>La suma es : " . suma(3, 5);
    echo "<br>La suma es : " . suma(3, 5);
    echo "<br>La suma es : " . suma(3, 5);


    $var1 = 8;
    $var2 = 3;
    echo "<br>Llamada por valor : " . restar($var3,$var4);

