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
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Agenda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">

                <!--Formulario-->
                <section id"inicio">
                    <h1 class="mt-3">Agenda de contactos</h1>
                    <form action="procesos/modificar.php" method="POST" class="row g-3 mt-3">
                        <h2 style="text-align: center">Modificar contacto</h2>

                        <?php
                        include("procesos/conexion.php");
                        $id = $_REQUEST['id'];
                        $sql = "SELECT * FROM contactos WHERE id ='$id' ";
                        $respuesta = $conexion->query($sql);
                        $contacto = $respuesta->fetch_assoc();
                        ?>
                        <input type="hidden" name="id" value="<?php echo $contacto['id']; ?>"">
                        <div class="col-md-6 col-lg-12">
                            <label for="inputEmail4" class="form-label">Nombre</label>
                            <input type="text" value="<?php echo $contacto['nombre']; ?>" name="nombre" class="form-control" placeholder="Nombre...">
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <label for="inputPassword4" class="form-label">Apellido</label>
                            <input type="texto" value="<?php echo $contacto['apellido']; ?>" name="apellido" class="form-control" placeholder="Apellido">
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <label for="inputPassword4" class="form-label">Teléfono</label>
                            <input type="texto" value="<?php echo $contacto['telefono']; ?>" name="telefono" class="form-control" placeholder="Teléfono...">
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <label for="inputPassword4" class="form-label">Correo</label>
                            <input type="email" value="<?php echo $contacto['correo']; ?>" name="correo" class="form-control" placeholder="Correo...">
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <label for="inputZip" class="form-label">Edad</label>
                            <input type="text" value="<?php echo $contacto['edad']; ?>" name="edad" class="form-control" placeholder="Edad...">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                        </div>
                        </div>
                        <div class="d-grid gap-2 mt-2">
                            <a href="index.php" class="btn btn-danger">Cancelar</a>
                        </div>
                    </form>
                </section>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/validaciones.js"></script>
    <script src="js/alertas.js"></script>
</body>

</html>