<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$sistema = $_SERVER['HTTP_USER_AGENT'];

$sql = "INSERT INTO contactos (nombre,apellido,telefono,correo,edad,sistema) VALUES ('$nombre','$apellido','$telefono','$correo','$edad','$sistema')";

$respuesta = $conexion->query($sql);

if($respuesta){
    header("Location:../index.php");
    echo "isersion correcta";
}else{
    echo "error";
}



?>