<?php
    include_once("../config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modificar Productos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Modifica Productos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="altaProducto.php">Alta Producto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bajaProducto.php">Baja Producto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consultaProducto.php">Consulta Producto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modificaProducto.php">Modifica Producto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <h2>Listado de Productos</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th class='text-center'>Id</th>
                    <th class='text-center'>Clave</th>
                    <th class='text-center'>Fabricante</th>
                    <th class='text-center'>Producto</th>
                    <th class='text-center'>Cantidad</th>
                    <th class='text-center'>Precio</th>
                </tr>
            </thead>
            <tbody>

                <?php
                        $consulta="SELECT * FROM productos";
                        $resultado=$db_PDO->query($consulta);
                        while($fila=$resultado->fetch()){
                        $idProducto=$fila["idProducto"];
                        $clave=$fila["clave"];
                        $fabricante=$fila["fabricante"];
                        $producto=$fila["producto"];
                        $cantidad=$fila["cantidad"];
                        $precio=$fila["precio"];
                        $precio2=number_format($precio, 2).' €';
                    echo "
                    <tr>
                        <td class='text-center'>$idProducto</td>
                        <td class='text-center'>$clave</td>
                        <td>$fabricante</td>
                        <td>$producto</td>
                        <td class='text-center'>$cantidad</td>
                        <td class='text-end'>$precio2</td>
                    </tr>
                    ";
                    }
                ?>
            </tbody>
        </table>
        <br>
        <form id="formulario" method="post" action="actualizaProducto.php">
            <div>
                <span class="input-group-text bg-primary text-white">Selecciona el id a Modificar</span>
                <input type="text" class="form-control" id="idProducto" name="idProducto" value="" required>
                <br>

                <label for="clave" classe="form-label"><strong>Selecciona la clave del producto</strong></label>
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
            <br>
            <div>
                <span class="input-group-text bg-primary text-white">Selecciona la cantidad a Modificar</span>
                <input type="text" class="form-control" id="cantidad" name="cantidad" value="" required>
            </div>
            <br>
            <div>
                <span class="input-group-text bg-primary text-white">Selecciona el precio a Modificar</span>
                <input type="text" class="form-control" id="precio" name="precio" value="" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Modificar Producto</button>
        </form>
        <br>
    </div>
</body>

</html>