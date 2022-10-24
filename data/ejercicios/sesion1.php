<?php

//crear o unirse a una sesion ya creada
session_start();

//$_SESSION["NOMBRE_VARIABLE"]
//contador visitas

if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 0;
} else {
    $_SESSION["contador"]++;
}

echo "He visitado la página " . $_SESSION["contador"] . " veces.";

echo "<br><a href= \"sesion2.php\"> Siguiente página </a>";