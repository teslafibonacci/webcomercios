<?php
  include_once("config.php");

  $Historico = 0;

  if(isset($_POST["producto"])){
    $clave=$_POST["clave"];
    $producto=$_POST["producto"];
    $fabricante=$_POST["fabricante"];
    $cantidad=$_POST["cantidad"];
    $precio=$_POST["precio"];
    $accion=$_POST["accion"];
    $fecha=$_POST["fecha"];
    $nuevo=$_POST["nuevo"];
  
    $cont=0;
    $consulta="SELECT * FROM historicos";
    $resultado=$db_PDO->query($consulta);
    while($fila=$resultado->fetch()){
    
      $cont = $cont + 1;
  }
  
    $idHistorico=$cont + 1;
    $alta="INSERT INTO historico (idHistorico, clave, producto, fabricante, cantidad, precio, accion, fecha, nuevo) VALUES (:idHistorico, :clave, :producto, :fabricante, :cantidad, :precio, :accion; :fecha, :nuevo)";
    $sentencia=$db_PDO->prepare($alta);
    $sentencia->bindValue(":idHistorico", $idHistorico);
    $sentencia->bindValue(":clave", $clave);
    $sentencia->bindValue(":producto", $producto);
    $sentencia->bindValue(":fabricante", $fabricante);
    $sentencia->bindValue(":cantidad", $cantidad);
    $sentencia->bindValue(":precio", $precio);
    $sentencia->bindValue(":accion", $accion);
    $sentencia->bindValue(":fecha", $fecha);
    $sentencia->bindValue(":nuevo", $nuevo);
    $sentencia->execute();
  }

  include("historicoAlmacen.php");
?>