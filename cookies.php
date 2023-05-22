<?php

include("conexionbd.php");

session_start();
$correo = $_SESSION['email'];
$fechalogin = date("h/d/m/y");

$fechainicio = date("h");
$_SESSION['fechainicio'] = $fechainicio;

setcookie("emaillog", "$correo", time() + 592.200);
$sesionlog = $_COOKIE['emaillog'];
$cookies = "INSERT INTO cookies(email, fechalogin) VALUES ('$sesionlog', '$fechalogin')";
$result = mysqli_query($conex, $cookies);

header("Location: http://localhost:8013/PC/WEB/paginaprincipal.php");