<?php
    include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Almacen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Almacen</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="almacen.php">Almacen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="compras.php">Compra</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="altaElemento.php">Elementos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="estadisticas.php">Estadistica</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historicoAlmacen.php">Historico</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ventas.php">Ventas</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-3">
    <h2>Ingreso almacen</h2>
    <form method="post" action="guardaAlmacen.php">

      <div class="mb-3 mt-3">
        <label for="accion" classe="form-label"><strong>Accion:</strong></label>
        <select name="accion" id="accion" class="form-select">
            
          <option value="compra">Compra</option>
          <option value="venta">Venta</option>

        </select>
      </div>

      <div class="mb-3 mt-3">
        <label for="accion" classe="form-label"><strong>Fecha:</strong></label>
        <input type="text" class="form-control" id="fecha" placeholder="Fecha de entrada" name="fecha" value="<?php echo date('d/m/Y'); ?>">

      </div>

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
        
      <div class="mb-3 mt-3">
        <label for="accion" classe="form-label"><strong>Accion:</strong></label>
        <select name="nuevo" id="nuevo" class="form-select">
            
          <option value="SI">Si</option>
          <option value="NO">No</option>
          
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Ingresar Producto</button>
    </form>

  </div>

</body>

</html>