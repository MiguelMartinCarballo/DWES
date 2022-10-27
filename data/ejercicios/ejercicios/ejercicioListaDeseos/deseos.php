<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['envio'])) {
        $lista = $_POST["listas"];
        if (!empty($lista)) {
            session_start();

            $listajson = json_encode($lista);
            $_SESSION["listadeseos"] = $listajson;
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Lista de deseos</h1>
    <form name="miformu" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <p>
            <p>Elige tus deseos: </p>
            <select name="listas[]" id="lista" multiple required>
                <option value="vaqueros">Vaqueros</option>
                <option value="movil">Telefono movil</option>
                <option value="coche">Coche</option>
                <option value="collar">Collar</option>
                <option value="cd">CD</option>
            </select>
        </p>

        <input type="submit" name="envio" id="envio" value="Enviar">
    </form>

    <?php
    if (isset($_SESSION['listadeseos'])) {

/*
        $listadeseos = $_SESSION['listadeseos'];
        echo "<br><br>Lista de deseos: ";
        for ($i = 0; $i < count($listadeseos); $i++) {
            echo "<br>- " . $listadeseos[$i];
        }


        $infojson = json_encode($listadeseos);
        echo "<br><br><br>Informacion en JSON: ";
        var_dump($infojson);

        $infonojson = json_decode($infojson);
        echo "<br><br><br>Informacion original desde JSON: ";
        var_dump($infonojson);

        echo "<br><br><br>" . $infojson;
*/

        echo "<br><br>Lista de deseos: <br>";
        $listadeseos = json_decode($_SESSION['listadeseos'], true);
        foreach($listadeseos as $value) {
        echo "<br>- " . $value;
        }
    }


    ?>
</body>

</html>