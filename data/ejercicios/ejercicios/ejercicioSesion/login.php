<?php
//usuario |  1234
//admin   |  4567
function comprobarcredenciales($nombreusu, $clave)
{
  if ($nombreusu === "usuario" && $clave === "1234") {
    $credenciales["nombreusu"] = "usuario";
    $credenciales["rol"] = 0;
    return $credenciales;
  }
  if ($nombreusu === "admin" && $clave === "4567") {
    $credenciales["nombreusu"] = "admin";
    $credenciales["rol"] = 1;
    return $credenciales;
  }
  return false;
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
  if(isset($_POST["envio"])){
    $credentials = comprobarcredenciales($_POST["usuario"], $_POST["pw"]);
    if($credentials === false){
      $error = 1;
    }else{
      session_start();
      $_SESSION["usuariook"] = $credentials;
      header("Location: principal.php");
      exit();
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
  <h1>Login:</h1>
  <?php
    if(isset($error) && $error == 1){
      echo "<p><font color=\"red\">Credenciales inválidas.</font></p>";
    }
  ?>
  <form name="miformu" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <p>
      <label for="usuario">Usuario</label>
      <input type="text" name="usuario" id="usuario">
    </p>
    <p>
      <label for="pw">Contraseña</label>
      <input type="text" name="pw" id="pw">
    </p>
    <br>
    <input type="submit" name="envio" id="envio" value="Entrar">
  </form>

</body>

</html>