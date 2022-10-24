<?php

if (isset($_GET['envio'])) {
    $idioma = $_GET["idioma"];
    if (empty($idioma)) {
        $idioma = "ESP";
    }

    setcookie("idioma", $idioma, strtotime("+60 minute"));

    $marca = $_GET["marca"];
    if (!empty($marca)) {
        setcookie("marca", $marca, strtotime("+60 minute"));
        header("Location: ejercicio01final.php");
        exit;
    }else{
        header("Location: ejercicio01formulario.html");
        exit;
    }
}else{
    // borrar las cookies y redirigir

    setcookie("idioma",'',time() -72000);
    setcookie("marca",'',time() -72000);
    header("Location: ejercicio01formulario.html");
    exit;
}

