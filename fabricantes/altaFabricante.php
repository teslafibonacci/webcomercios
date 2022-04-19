<?php
    include_once("../config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alta Fabricantes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Alta Fabricantes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="altaFabricante.php">Alta Fabricantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bajaFabricante.php">Baja Fabricantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consultaFabricante.php">Consulta Fabricantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modificaFabricante.php">Modifica Fabricantes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <h2>Alta Fabricantes</h2>
        <form method="post" action="guardaFabricante.php">
            <div class="mb-3 mt-3">
                <label for="fabricante">Fabricante:</label>
                <input type="text" class="form-control" id="fabricante" placeholder="Ingresa el nombre del comercio"
                    name="fabricante">
            </div>

            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Fabricante</button>
        </form>
    </div>

</body>

</html>