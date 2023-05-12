<?php


#Insertar datos 
function Insertar($nombre, $apellido, $correo, $contrasena)
{

    if ($nombre == "" || $correo == "" || $contrasena == "") {
        header("Location: ../registro.php?e=requerido");
    } else {
        include("conexion.php");
        #Filtro para saber si ya esta registrado el correo
        $filtro = "SELECT * FROM usuarios WHERE correo = '$correo'";
        $res = $conexion->query($filtro);
        $comparador = $res->fetch_assoc();
        if ($comparador > 0) {
            header("Location: ../registro.php?e=correo");
        } else {
            $sql = "INSERT INTO usuarios(nombre,apellido,correo,contrasena) VALUES('$nombre','$apellido','$correo','$contrasena')";

            $res = $conexion->query($sql);

            if ($res) {
                header("Location: ../registro.php?var=sesion");
            } else {
                echo "chafie todo";
            }
        }
    }
}


function Sesion($correo, $pass)
{
    include("conexion.php");


    $sql = "SELECT * FROM usuarios WHERE correo ='$correo' AND contrasena = '$pass'";
    $res = $conexion->query($sql);
    session_start();
    if ($comprobar = mysqli_fetch_array($res)) {
        $_SESSION['correo'] = $correo;
        $_SESSION['pass'] = $pass;
        header("Location: ../index.php");
    } else {
        header("Location: ../registro.php?var=error");
    }
}

function Cerrar_sesion()
{
    session_start();
    session_destroy();
    header("Location: ../registro.php");
}

function Comprobar_sesion()
{
    session_start();
    if (isset($_SESSION['correo']) and isset($_SESSION['pass'])) {
    } else {
        session_destroy();
        header("Location: registro.php");
    }
}

@$num = $_REQUEST['num'];

switch ($num) {
    case 1:
        Insertar($_POST['nombre'], $_POST['apellido'], $_POST['correo'], $_POST['contrasena']);
        break;
    case 2:
        Sesion($_POST['correo'], $_POST['pass']);
        break;
    case 3:
        Cerrar_sesion();
        break;

    default:
        break;
}
