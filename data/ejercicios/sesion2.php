<?php

session_start();

/*
//Eliminar sesion

$_SESSION = array();
session_destroy();
setcookie(session_name(),'', time()-7200, '/');
*/
echo "La página se ha cargado " . $_SESSION["contador"] . " veces";