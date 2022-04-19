<?php
  include_once("../config.php");

  $Producto = 0;

  if(isset($_POST["producto"])){
    $clave=$_POST["clave"];
    $producto=$_POST["producto"];
    $fabricante=$_POST["fabricante"];
    $cantidad=$_POST["cantidad"];
    $precio=$_POST["precio"];
  
    $cont=0;
    $consulta="SELECT * FROM productos";
    $resultado=$db_PDO->query($consulta);
    while($fila=$resultado->fetch()){
    
      $cont = $cont + 1;
  }
  
    $idProducto=$cont + 1;
    $alta="INSERT INTO productos (idProducto, clave, producto, fabricante, cantidad, precio) VALUES (:idProducto, :clave, :producto, :fabricante, :cantidad, :precio)";
    $sentencia=$db_PDO->prepare($alta);
    $sentencia->bindValue(":idProducto", $idProducto);
    $sentencia->bindValue(":clave", $clave);
    $sentencia->bindValue(":producto", $producto);
    $sentencia->bindValue(":fabricante", $fabricante);
    $sentencia->bindValue(":cantidad", $cantidad);
    $sentencia->bindValue(":precio", $precio);
    $sentencia->execute();
  }

  include("consultaProducto.php");
?>