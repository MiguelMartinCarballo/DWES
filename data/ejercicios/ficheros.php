<?php

$nombrefich = "modulodwes.txt";
$fp = fopen($nombrefich, "r");

if(!$fp){
    echo "<br>No he podido leer el fichero";
}else{
    //leer el fichero
    
    // 1 - caracter a caracter: funcion fgetc

    /*
    while(!feof($fp)){
        $caracter = fgetc($fp);
        if($caracter == "\n"){
            echo "<br>";
        }
        echo $caracter;
    }
    */


    // 2 - Leyendo linea a linea
    
    /*
    while(!feof($fp)){
        $linea = fgets($fp);
        echo $linea . "<br>";
    }
    */


    // 3 - fread
    $contenido = fread($fp, filesize($nombrefich));
    var_dump($contenido);
    
}

echo "<br>Cerrando el fichero ...";
fclose($fp);

$fp = fopen($nombrefich, "a"); 
if(!$fp){
    echo "<br>No he podido abrir el fichro";
}else{
    fwrite($fp, "Esta es otra linea." . PHP_EOL);
}
fclose($fp);