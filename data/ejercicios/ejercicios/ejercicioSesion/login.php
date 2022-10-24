<!--
    Crear un entorno de login

    - La pagina de login : usuario y password

        - usuario = usuario
          password = 1234 => ok , rol = 0

        - usuario = admin
          passsword = 4567 => ok , rol = 1
    
        - Si no => muestre mensaje login erroneo

    - Si login ok => principal.php . Bienvenido usuario
        - Enlace logout.php
    
    - Logout.php => cerrar la sesion y enlace/redireccion a login.php

-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login:</h1>
    <form name="miformu" action="ejercicio01cookies.php" method="post">
        <p>
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" value="usuario">
        </p>
        <br>
        <p>
        <label for="pw">Contraseña</label>
        <input type="text" name="pw" id="pw" value="pw">
        </p>

        <br>
        <input type="submit" name="envio" id="envio" value="Entrar">
    </form>
</body>

</html>

<?php

session_start();

if (isset($_POST['envio'])) {
  $usuario = $_POST["usuario"];
  $pw = $_POST["pw"];
  if (!empty($usuario) && !empty($pw)) {
    if($usuario == "usuario" && $pw == "1234"){
      if (!isset($_SESSION["contador"])) {
        $_SESSION["contador"] = 0;
      }
    }
  }
}


session_start();

