<?php

$miarray = ["hola", 25, [1, 3, 5]];
$infoguardar = serialize($miarray);

//definir una cookie
//setcookie("primeracookie", "aceptado",time()+(24*60*60)); //un dia
setcookie("primeracookie", "aceptado", strtotime("+1 minute"));
setcookie("segundacookie", $infoguardar, strtotime("+2 minute"));

echo "<h1>Mi primera cookie</h1>";

echo "Valor de la cookie 1: " . $_COOKIE["primeracookie"];
echo "<pre>";
var_dump(unserialize($_COOKIE["segundacookie"]));

echo "<br>Numero de cookies creadas: " . count($_COOKIE);

//eliminar cookie
//setcookie("primeracookie", "aceptado", time()-120);