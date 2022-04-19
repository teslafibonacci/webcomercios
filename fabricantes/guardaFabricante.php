<?php
  include_once("../config.php");

  if(isset($_POST["fabricante"])){
    $fabricante = $_POST["fabricante"];
  
    $cont = 0;
    $consulta = "SELECT * FROM fabricantes";
    $resultado = $db_PDO->query($consulta);
    while($fila=$resultado->fetch()){
    
      $cont = $cont + 1;
    }
  
    $idFabricante = $cont + 1;
    $alta = "INSERT INTO fabricantes (idFabricante, fabricante) VALUES (:idFabricante, :fabricante)";
    $sentencia = $db_PDO->prepare($alta);
    $sentencia->bindValue(":idFabricante", $idFabricante);
    $sentencia->bindValue(":fabricante", $fabricante);
    $sentencia->execute();
  }

  include("consultaFabricante.php");
?>