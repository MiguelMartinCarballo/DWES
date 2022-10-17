<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Información del fichero: </h1>
    <?php
    if(isset($_POST["envio"])){

        echo "<br>Nombre del fichero: " . $_FILES["myfile"]["name"];
        echo "<br>Extension del fichero: " . $_FILES["myfile"]["type"];
        echo "<br>Tamaño del fichero: " . $_FILES["myfile"]["size"];
        echo "<br>Nombre temporal del fichero: " . $_FILES["myfile"]["tmp_name"];

        $destino = "subidos/".$_FILES["myfile"]["name"];
        $flag = move_uploaded_file($_FILES["myfile"]["tmp_name"],$destino);
        echo $flag ? "fichero subido correctamente" : "fallo en la subida";

        if($flag){
            //subida ok
        }else{ 
            //subida erronea
        }
    }else{
        echo "<p>No has enviado ningun fichero</p>";
    }
    ?>
</body>

</html>                                                                                                                