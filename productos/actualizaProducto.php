<?php
  include_once("../config.php");

    if(isset($_POST["idProducto"]));{

      $idProducto=$_POST["idProducto"];
      $producto=$_POST["producto"];
      $fabricante=$_POST["fabricante"];
      $clave=$_POST["clave"];
      $cantidad=$_POST["cantidad"];
      $precio=$_POST["precio"];

      $actualizar = "UPDATE productos SET producto = '".$producto."', fabricante = '".$fabricante."', clave = '".$clave."', cantidad = '".$cantidad."', precio = '".$precio."' WHERE idProducto = '".$idProducto."'";
      $producto=$db_PDO->query($actualizar);
    }

  include("modificaProducto.php");
?>