<?php

if(isset($_COOKIE["idioma"]) && isset($_COOKIE["marca"])){
    $idioma = $_COOKIE["idioma"];
    $marca = $_COOKIE["marca"];

    switch($idioma){
        case "ESP":
            echo "Bienvenido querido usuario.";
        break;
        case "ING":
            echo "Welcome dear user.";
        break;
        case "ALE":
            echo "Willkommen Sehr geehrter Nutzer.";
        break;
    }


    echo "<br><br>";
    if (!empty($marca)) {
        switch($marca){
            case "BMW":
                echo "BMW";
            break;
            case "Ford":
                echo "Ford";
            break;
            case "Audi":
                echo "Audi";
            break;
        }
    } else {
        echo "No has elegido ninguna marca.";
    }
}else{
    setcookie("idioma",'',time() - 72000);
    setcookie("marca",'',time() - 72000);
    echo "<h3>Debe seleccionar algunos datos</h3>";
    echo "<a href=\"ejercicio01formulario.html\">Volver al inicio</a>";
}
