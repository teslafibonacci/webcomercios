<?php
  include_once("../config.php");

    if(isset($_POST["idProducto"])){
      $idProducto=$_POST["idProducto"];

      $borrar = "DELETE FROM productos WHERE idProducto = ?";
      $producto=$db_PDO->prepare($borrar);
      $producto->execute([$idProducto]);
    }

  include("bajaProducto.php");
?>