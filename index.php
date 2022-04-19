<?php
    include_once("config.php");

    $consulta="SELECT * FROM comercios WHERE idComercio = 1";
    $resultado=$db_PDO->query($consulta);
    while($fila=$resultado->fetch()){
        $comercio=$fila["comercio"];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>WebDevMagdaleno</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><?php echo $comercio; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./productos/consultaProducto.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./fabricantes/consultaFabricante.php">Fabricante</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./comercios/consultaComercio.php">Comercios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gestiones.php">Gestiones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <img src="./images/webDev.jpg" class="mx-auto d-block rounded" style="width:50%">
    </div>
</body>

</html>