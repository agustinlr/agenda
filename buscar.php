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
        <div class="container">
            <a class="navbar-brand" href="index.php">Agenda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>


                </ul>
                <form class="d-flex" action="buscar.php" method="POST">
                    <input required class="form-control me-2" type="text" name="q" placeholder="Buscar contacto">
                    <button class="btn btn-outline-dark" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">


                <!--Tabla-->
                <h1 class="mt-5" style="text-align: center;">Contactos</h1>


                <table class="table">

                    <thead>

                        <tr>
                            <td><a href="formulario.php">Agregar</a></td>
                            <td colspan="5" style="text-align: center;">Agenda de contactos</td>

                        </tr>

                        <tr class="table-primary">

                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Edad</th>
                            <th colspan="2" scope="col">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("procesos/conexion.php");
                        $id = $_POST['q'];
                        $sql = "SELECT * FROM contactos WHERE 
                        id  LIKE '%$id%' OR
                        nombre  LIKE '%$id%' OR
                        apellido  LIKE '%$id%' OR
                        telefono  LIKE '%$id%' OR
                        correo  LIKE '%$id%' OR 
                        edad  LIKE '%$id%'";
                        $respuesta = $conexion->query($sql);
                        while ($contacto = $respuesta->fetch_assoc()) { ?>

                            <tr>
                                <th scope="row"><?php echo $contacto['id']; ?></th>
                                <td><?php echo $contacto['nombre']; ?></td>
                                <td><?php echo $contacto['apellido']; ?></td>
                                <td><?php echo $contacto['telefono']; ?></td>
                                <td><?php echo $contacto['correo']; ?></td>
                                <td><?php echo $contacto['edad']; ?></td>
                                <td><a href="formulario2.php?id=<?php echo $contacto['id']; ?>">Modificar</a></td>
                                <td><a href="procesos/eliminar.php?id=<?php echo $contacto['id']; ?>" onclick="return Eliminar();"">Eliminar</a></td>
                            </tr>
                        <?php
                        }

                        ?>


                    </tbody>
                </table>

            </div>
        </div>
    </div>



    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
                                        <script src="js/validaciones.js"></script>
                                        <script src="js/alertas.js"></script>
</body>

</html>