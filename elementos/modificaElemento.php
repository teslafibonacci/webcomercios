<?php
    include_once("../config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modifica Elementos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Modifica Elementos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="altaElemento.php">Alta Elemento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bajaElemento.php">Baja Elemento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consultaElemento.php">Consulta Elemento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modificaElemento.php">Modifica Elemento</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <h2>Modifica de Elementos</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th class='text-center'>Id</th>
                    <th class='text-center'>Clave</th>
                    <th class='text-center'>Descripcion</th>
                </tr>
            </thead>
            <tbody>

                <?php
                        $consulta="SELECT * FROM elementos";
                        $resultado=$db_PDO->query($consulta);
                        while($fila=$resultado->fetch()){
                        $idElemento=$fila["idElemento"];
                        $clave=$fila["clave"];
                        $descripcion=$fila["descripcion"];
                        
                        // if($idElemento % 2 == 0){
                        //     $color = "table-light";
                        // }else {
                        //     $color = "table-primary";
                        // }

                    echo "
                    <tr>
                        <td class='text-center'>$idElemento</td>
                        <td class='text-center'>$clave</td>
                        <td>$descripcion</td>
                    </tr>
                    ";
                    }
                ?>
            </tbody>
        </table>
        <br>
        <form id="formulario" method="post" action="actualizaElemento.php">
            <div>
                <span class="input-group-text bg-primary text-white">Selecciona el id a Modificar</span>
                <input type="text" class="form-control" id="idElemento" name="idElemento" value="" required>
            </div>
            <br>
            <div>
                <span class="input-group-text bg-primary text-white">Selecciona la clave a Modificar</span>
                <input type="text" class="form-control" id="clave" name="clave" value="" required>
            </div>
            <br>
            <div>
                <span class="input-group-text bg-primary text-white">Selecciona la descripcion a Modificar</span>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Modifica Elemento</button>
        </form>
        <br>
    </div>
</body>

</html>