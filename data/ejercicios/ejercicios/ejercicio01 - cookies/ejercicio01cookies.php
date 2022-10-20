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
    }
}

header("Location: ejercicio01final.php");