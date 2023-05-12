<?php
session_start();
if (isset($_SESSION['correo']) and isset($_SESSION['pass'])) {
    header("Location: index.php");
} else {
    session_destroy();
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Agenda de contactos</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d8d8d8;">
        <div class="container">
            <a class="navbar-brand" href="index.php">Agenda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">



                </ul>
                <!--Formulario de sesion-->
                <?php
                #@$var = $_REQUEST['var'];

                #if ($var == "error") { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Error al iniciar Sesión
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form class="error d-flex" action="procesos/funciones.php?num=2" method="POST">
                    <?php # } else { ?>
                        <form class="d-flex" action="procesos/funciones.php?num=2" method="POST">

                        <?php #}
                        ?>
                        <input require type="email" required class="form-control me-2" type="text" name="correo" placeholder="Correo...">
                        <input require type="password" class="form-control me-2" type="text" name="pass" placeholder="Contraseña...">
                        <button class="btn btn-outline-dark" type="submit">Entrar</button>
                        </form>
            </div>
        </div>
    </nav>





    <div class="container">
        <div class="row">
            <div class="col">


                <!--Formulario-->

                <section id="inicio">
                    <h1 class="mt-3">Nueva Cuenta de Usuario</h1>
                    <!-- aquí va un php--><?php
                    #@$e = $_REQUEST['e'];

                    #if ($e == "requerido") { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Los campos de Nombre, Correo y Contraseña son Obligatorios
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <form action="procesos/funciones.php?num=1" method="POST" class="requerido row g-3 mt-3 ">
                        <?php # } else { ?>
                            <form action="procesos/funciones.php?num=1" method="POST" class="row g-3 mt-3 ">
                            <?php # } ?>
                            <div class="col-md-6 col-lg-12">
                                <label class="form-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Aquí su nombre">
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <label class="form-label">Apellido</label>
                                <input type="texto" name="apellido" class="form-control" placeholder="Aquí su apellido">
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <label class="form-label">Correo</label>
                                <input type="email" name="correo" class="form-control" placeholder="micorreo@gmail.com">
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <label class="form-label">Contraseña</label>
                                <input type="pass" name="contrasena" class="form-control" placeholder="*******">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Aceptar</button>
                            </div>
                            </form>
                </section>








            </div>
        </div>
    </div>

    <?php

    include("piepagina.php");

    ?>