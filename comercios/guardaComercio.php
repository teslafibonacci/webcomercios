<?php
  include_once("../config.php");

  $idComercio = 0;

  if(isset($_POST["comercio"])){
    $comercio=$_POST["comercio"];
  
    $cont=0;
    $consulta="SELECT * FROM comercios";
    $resultado=$db_PDO->query($consulta);
    while($fila=$resultado->fetch()){
    
      $cont = $cont + 1;
    }
  
    $idComercio = $cont + 1;
    $alta="INSERT INTO comercios (idComercio, comercio) VALUES (:idComercio, :comercio)";
    $sentencia=$db_PDO->prepare($alta);
    $sentencia->bindValue(":idComercio", $idComercio);
    $sentencia->bindValue(":comercio", $comercio);
    $sentencia->execute();
  }

  include("consultaComercio.php");
?>
