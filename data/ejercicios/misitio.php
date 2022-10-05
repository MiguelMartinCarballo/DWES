<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <footer>
        <?php
            include "footer.php"; 
            //(require "footer.php" , en caso de error no carga la página)
            //include_once "footer.php"; (solo lo incluye una vez, primero debe ir el include normal)
            //require_once "footer.php"; ("")
            echo "<br> El nombre del admin es: " . $nombreadmin;
        ?>
    </footer>
</body>
</html>