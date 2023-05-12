<?php

include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];


$sql = "UPDATE contactos SET 
nombre = '$nombre',
apellido = '$apellido',
telefono = '$telefono',
correo = '$correo',
edad = '$edad'
WHERE id = '$id'";

$respuesta = $conexion->query($sql);

if($respuesta){
    header("Location:../index.php");
}else{
    echo "error";
}

?>