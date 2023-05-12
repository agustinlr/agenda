<?php

include("conexion.php");

$id = $_REQUEST['id'];

$sql = "DELETE FROM contactos WHERE id = '$id'";
$respuesta = $conexion->query($sql);

if($respuesta){
    header("Location:../index.php");
}else{
    echo "Eliminación no exitosa";
}



?>