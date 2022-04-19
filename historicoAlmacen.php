<?php
    include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Listado Almacen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Consulta Productos</a>
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
        <h2>Listado de Productos</h2><br>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th class='text-center'>Id</th>
                    <th class='text-center'>Fabricante</th>
                    <th class='text-center'>Clave</th>
                    <th class='text-center'>Producto</th>
                    <th class='text-center'>Cantidad</th>
                    <th class='text-center'>Compra</th>
                    <th class='text-center'>Venta</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $consulta="SELECT * FROM historico";
                    $resultado=$db_PDO->query($consulta);
                    while($fila=$resultado->fetch()){
                        $idProducto=$fila["idHistorico"];
                        $fabricante=$fila["fabricante"];
                        $fecha=$fila["fecha"];
                        $clave=$fila["clave"];
                        $producto=$fila["producto"];
                        $cantidad=$fila["cantidad"];
                        $precio=$fila["precio"];
                        $precio2=number_format($precio, 2).' €';
                        $accion=$fila["accion"];

                    echo "
                    <tr>
                        <td class='text-center'>$idProducto</td>
                        <td class='text-center'>$clave</td>
                        <td class='text-center'>$producto</td>
                        <td class='text-center'>$fabricante</td>
                        <td class='text-center'>$cantidad</td>
                        <td class='text-end'>$precio2</td>
                    </tr>
                    ";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>