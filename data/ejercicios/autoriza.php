<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página de chequeo de credenciales: </h1>
    <?php
        if(isset($_GET['envio'])){
            if(!empty($_GET['nombreusuario'])){
                $usuario = $_GET['nombreusuario'];
                echo "<br> Usuario introducido : " . $_GET['nombreusuario'];
            }else{
                echo "<br><h3>No has introducido ningun usuario</h3>";
            }

            if(!empty($_GET['passwd'])){
                $usuario = $_GET['passwd'];
                echo "<br> Contraseña introducido : " . $_GET['passwd'];
            }else{
                echo "<br><h3>No has introducido ninguna contraseña</h3>";
            }
        }

        // Recogida valores checkbox
        if(isset($_GET['envio'])){
            if(!empty($_GET['asignaturas'])){
                $asignaturas = $_GET['asignaturas'];
                foreach($asignaturas as $asignatura){
                    echo "<br> Modulo elegido : " . $asignatura;
                }
            }else{
                echo "<br> Ningun modulo elegido ";
            }
        }

        // Recogida datos RadioButton
        if(isset($_GET['envio'])){
            $equipobasket = $_GET["equipo"];
            if(!empty($equipobasket)){
                echo "<br> Tu equipo de basket preferido es : " . $equipobasket;
            }else{
                echo "<br> No has elgido ningun equipo";
            }
        }

        // Recogida de lista desplegable
        if(isset($_GET['envio'])){
            $menupreferido = $_GET["menus"];
            if(!empty($menupreferido)){
                echo "<br> Tu plato preferido es : " . $menupreferido;
            }else{
                echo "<br> No has elgido ningun plato";
            }
        }
        
        // Recogida de lista desplegable MULTIPLE
        if(isset($_GET['envio'])){
            $menupreferidos = $_GET["menusm"];
            if(!empty($menupreferidos)){
                foreach($menupreferidos as $menu){
                    echo "<br> Tu plato preferido es : " . $menu;
                }
            }else{
                echo "<br> No has elgido ningun plato";
            }
        } 
    ?>
</body>
</html>