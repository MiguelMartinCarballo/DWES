<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="cargaficheros.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="mifich">Selecciona un fichero</label>
            <input type="file" name="myfile" id="mifich">
        
            <input type="submit" name="envio" value="Enviar fichero">
        </p>
    </form>
</body>

</html>