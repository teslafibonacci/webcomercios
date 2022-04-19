<?php
    include_once("../config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Baja Comercios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Baja Comercios</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="altaComercio.php">Alta Comercio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bajaComercio.php">Baja Comercio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consultaComercio.php">Consulta Comercio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modificaComercio.php">Modifica Comercio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <h2>Baja Comercios</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th class='text-center'>Id</th>
                    <th class='text-center'>Comercio</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $consulta="SELECT * FROM comercios";
                $resultado=$db_PDO->query($consulta);
                while($fila=$resultado->fetch()){
                    $idComercio=$fila["idComercio"];
                    $comercio=$fila["comercio"];

                echo "
                    <tr>
                    <td class='text-center'>$idComercio</td>
                    <td>$comercio</td>
                    </tr>
                ";
                }
            ?>
            </tbody>
        </table>
        <br>
        <form id="formulario" method="post" action="borraComercio.php">
            <div>
                <span class="input-group-text bg-primary text-white">Selecciona el id a Eliminar</span>
                <input type="text" class="form-control" id="idComercio" name="idComercio" value="" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Eliminar Comercio</button>
        </form>
    </div>
</body>

</html>