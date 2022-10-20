<?php
    
    if (isset($_GET['envio'])) {
        $idioma = $_GET["idioma"];
        if(empty($idioma)){
            $idioma = "Español";
        }
        setcookie("idioma", $idioma, strtotime("+60 minute"));

        $marca = $_GET["marca"];
        if (!empty($marca)) {
            setcookie("marca", $marca, strtotime("+60 minute"));
        }


        switch($idioma){
            case "ESP":
                echo "Bienvenido querido usuario.";
            break;
            case "ING":
                echo "Welcome dear user.";
            break;
            case "ALE":
                echo "Willkommen Sehr geehrter Nutzer.";
            break;
        }
        

        echo "<br><br>";
        $marca = $_GET["marca"];
        if (!empty($marca)) {
            switch($marca){
                case "BMW":
                    echo "BMW";
                break;
                case "Ford":
                    echo "Ford";
                break;
                case "Audi":
                    echo "Audi";
                break;
            }
        } else {
            echo "No has elegido ninguna marca.";
        }
    }
    ?>