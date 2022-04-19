<?php
    include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Compras</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Compras</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="altaProducto.php">Alta Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bajaProducto.php">Baja Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modificaproducto.php">Modifica Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consultaProducto.php">Consulta Productos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <h2>Compras</h2>
        <form method="post" action="guardaProducto.php">
            <div class="mb-3 mt-3">
                
            <label for="clave" classe="form-label"><strong>Selecciona el producto</strong></label>
                <select name="clave" id="clave" class="form-select">

                    <?php
                    $consulta="SELECT * FROM elementos";
                    $elementos=$db_PDO->query($consulta);
                    while($row=$elementos->fetch()){
                        $clave=$row ["clave"];
                        $descripcion=$row["descripcion"];
                        $mensaje=$clave." ".$descripcion;
                        echo "<option value='$clave'>$mensaje";
                    }
                ?>
                </select>
            </div>

            <div class="mb-3 mt-3">
            <label for="fabricante" classe="form-label"><strong>Selecciona el fabricante</strong></label>
                <select name="fabricante" id="fabricante" class="form-select">

                    <?php
                    $consulta="SELECT * FROM fabricantes";
                    $elementos=$db_PDO->query($consulta);
                    while($row=$elementos->fetch()){
                        $fabricante=$row ["fabricante"];
                        echo "<option value='$fabricante'>$fabricante";
                    }
                ?>
                </select>
            </div>
            <div class="mb-3 mt-3">
                <label for="cantidad">Cantidad:</label>
                <input type="text" class="form-control" id="cantidad" placeholder="Ingresa la cantidad" name="cantidad">
            </div>

            <div class="mb-3 mt-3">
                <label for="precio">Precio:</label>
                <input type="text" class="form-control" id="precio" placeholder="Ingresa el precio" name="precio">
            </div>

            <button type="submit" class="btn btn-primary">Guardar Producto</button>
        </form>

    </div>

</body>

</html>