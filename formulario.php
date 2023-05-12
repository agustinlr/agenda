<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Agenda de contactos</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #d8d8d8;">
        <div class="container">
            <a class="navbar-brand" href="#">Agenda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                </ul>
              
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">


               

                <!--Formulario-->
                <section id"inicio">
                    <h1 class="mt-3">Agenda de contactos</h1>
                    <form action="procesos/insertar.php" method="POST" class="row g-3 mt-3 needs-validation"  novalidate>
                        <h2 style="text-align: center">Nuevo contacto</h2>
                        <div class="col-md-6 col-lg-12">
                            <label for="inputEmail4" class="form-label">Nombre</label>
                            <input id="validationCustom01" type="text" name="nombre" class="form-control" placeholder="Nombre..."  required>
                            <div class="valid-feedback">
      Looks good!
    </div>

                        </div>
                        <div class="col-md-6 col-lg-12">
                            <label for="inputPassword4" class="form-label">Apellido</label>
                            <input type="texto" id="validationCustom02"  required name="apellido" class="form-control" placeholder="Apellido">
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <label for="inputPassword4" class="form-label">Teléfono</label>
                            <input type="texto" name="telefono" class="form-control" placeholder="Teléfono..." id="validationCustom03" required>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <label for="inputPassword4" class="form-label">Correo</label>
                            <input type="email" name="correo" class="form-control" placeholder="Correo..." id="validationCustom04" required>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <label for="inputZip" class="form-label">Edad</label>
                            <input type="text" name="edad" class="form-control" placeholder="Edad..." id="validationCustom05" required>
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