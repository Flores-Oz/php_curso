<?php
include_once("usuario.php");
//Se USARA PDO para esta ejemplo 
$usuario = new Usuario(
    0,
    "Jose",
    "Lopez",
    "12345678",
    "25",
);
$usuario->insertar();
?>