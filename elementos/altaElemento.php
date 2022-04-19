<?php
    include_once("../config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alta Elementos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Elementos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="altaElemento.php">Alta Elementos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bajaElemento.php">Baja Elementos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modificaElemento.php">Modifica Elementos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consultaElemento.php">Consulta Elementos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <h2>Alta Elementos</h2>
        <form method="post" action="guardaElemento.php">
            <div class="mb-3 mt-3">
                <label for="clave"> <strong>Clave:</strong></label>
                <input type="text" class="form-control" id="clave" placeholder="Ingresa la clave" name="clave">
            </div>

            <div class="mb-3 mt-3">
                <label for="descripcion"> <strong>Descripcion:</strong></label>
                <input type="text" class="form-control" id="descripcion" placeholder="Ingresa la descripcion"
                    name="descripcion">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Elemento</button>
        </form>

    </div>

</body>

</html>