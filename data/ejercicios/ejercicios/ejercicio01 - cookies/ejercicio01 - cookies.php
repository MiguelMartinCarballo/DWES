<?php
    
    if (isset($_GET['envio'])) {
        $idioma = $_GET["idioma"];
        if(empty($idioma)){
            $idioma = "Español";
        }
        setcookie("idioma", $idioma, strtotime("+60 minute"));
        switch($idioma){
            case "Español":
                echo "Bienvenido querido usuario.";
            break;
            case "Inglés":
                echo "Welcome dear user.";
            break;
            case "Alemán":
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