<?php

$miarray = ['a' => "hola", 'b' => 25, 'c' => [1, 3, 5]];
$infoguardar = serialize($miarray);


$infojson = json_encode($miarray);
echo "Codificacion del array en json: " . $infojson;

$infodecode = json_decode($infojson);
echo "<br>Decodificacion delarray en json: ". $infodecode;

/*
//definir una cookie
//setcookie("primeracookie", "aceptado",time()+(24*60*60)); //un dia
setcookie("primeracookie", $infoguardar, strtotime("+1 minute"));
setcookie("segundacookie", $infojson, strtotime("+2 minute"));

echo "<h1>Mi primera cookie</h1>";

echo "Valor de la cookie 1: " . $_COOKIE["primeracookie"];
echo "<pre>";
var_dump(unserialize($_COOKIE["segundacookie"]));

echo "<br>Vlor de cookie 2: ";
var_dump($infojson);

//echo "<br>Numero de cookies creadas: " . count($_COOKIE);

//eliminar cookie
//setcookie("primeracookie", "aceptado", time()-120);

*/