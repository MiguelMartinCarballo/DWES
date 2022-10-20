<?php

$miarray = ['a' => "hola", 'b' => 25, 'c' => [1, 3, 5]];
$infoguardar = serialize($miarray);


//definir una cookie
//setcookie("primeracookie", "aceptado",time()+(24*60*60)); //un dia
setcookie("primeracookie", $infoguardar, strtotime("+1 minute"));
setcookie("segundacookie", "eee", strtotime("+2 minute"));

echo "<h1>Mi primera cookie</h1>";

echo "Valor de la cookie 1: " . $_COOKIE["primeracookie"];
echo "<pre>";
var_dump(unserialize($_COOKIE["segundacookie"]));

echo "<br>Vlor de cookie 2: " . $_COOKIE["segundacookie"];

//echo "<br>Numero de cookies creadas: " . count($_COOKIE);

//eliminar cookie
//setcookie("primeracookie", "aceptado", time()-120);
