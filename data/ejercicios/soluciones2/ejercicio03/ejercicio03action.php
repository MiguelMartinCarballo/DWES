<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['envio'])){
            if(!empty($_GET['nombre'])){
                $nombre = $_GET['nombre'];
                echo "<br> klk " . $_GET['nombre'];
            }else{
                echo "INTRODUCE UN NOMBRE";
                echo "<br><br><a href='ejercicio02.html'> Atrás </a>";
                exit;
            }
        }
    ?>
</body>
</html>