<?php
// serialize, unserie

$capitales = [
    "españa" => "madrid" ,
    "francia" => "paris"
];

$infotrans = ""; //informacion trans
$infonotrans = ""; //informacion de vuelta a la original

$infotrans = serialize($capitales);
echo "<br>Informacion serializada: ";
var_dump($infotrans);

$infonotrans = unserialize($infotrans);
echo "<br>Informacion deserializada: ";
var_dump($infonotrans);

$infotrans = json_encode($capitales);
echo "<br>Informacion en JSON: ";
var_dump($infotrans);

$infonotrans = json_decode($infotrans);
echo "<br>Informacion original desde JSON: ";
var_dump($infonotrans);