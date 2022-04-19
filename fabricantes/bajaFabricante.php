<?php
    include_once("../config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Baja Fabricantes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Baja Fabricantes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="altaFabricante.php">Alta Fabricante</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bajaFabricante.php">Baja Fabricante</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consultaFabricante.php">Consulta Fabricante</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modificaFabricante.php">Modifica Fabricante</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <h2>Baja de Fabricantes</h2>
        <table class="table table-bordered table-striped">
            <tbody>
                <thead class="table-primary">
                    <tr>
                        <th>Id</th>
                        <th>fabricante</th>
                    </tr>
                </thead>

                <?php
                $consulta = "SELECT * FROM fabricantes";
                $resultado = $db_PDO->query($consulta);
                while($fila=$resultado->fetch()){
                $idFabricante =$fila["idFabricante"];
                $fabricante =$fila["fabricante"];

                echo "
                <tr>
                    <td>$idFabricante</td>
                    <td>$fabricante</td>
                </tr>
                ";
                }
            ?>
            </tbody>
        </table>
        <br>
        <form id="formulario" method="post" action="borraFabricante.php">
            <div>
                <span class="input-group-text bg-primary text-white">Selecciona el id a Eliminar</span>
                <input type="text" class="form-control" id="idFabricante" name="idFabricante" value="" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary mt-3">Eliminar Fabricante</button>
        </form>
        <br>
    </div>
</body>

</html>