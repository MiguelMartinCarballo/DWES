<?php
    $mihost = $_SERVER['HTTP_HOST'];

    echo "<br>El host al que va la predicción es: " . $mihost;


/*mostrar aqui:
    - el nombre del servidor web
    - el lenguaje
    - el nombre de la página acutal que realiza la solicitud
    - tipo de navegador
*/

    $nombreServer = $_SERVER['SERVER_NAME'];
    $lenguaje = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    $nombrePagina = $_SERVER['PHP_SELF'];
    $navegador = $_SERVER['HTTP_USER_AGENT'];


    echo "<br>Nombre del servidor web: " . $nombreServer;
    echo "<br>Lenguaje: " . $lenguaje;
    echo "<br>Nombre página acutal: " . $nombrePagina;
    echo "<br>Navegador: " . $navegador;