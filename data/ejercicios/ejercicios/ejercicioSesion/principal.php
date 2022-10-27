<?php

session_start();

if(!isset($_SESSION["loginok"])){
    header('Location: login.php');
}
echo "usuario: " . $_SESSION["usuariook"]["nombreusu"];
echo "<br><br>rol: " . $_SESSION["usuariook"]["rol"];

echo "<br><br><a href=\"logout.php\"> Log out</a>";