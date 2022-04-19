<?php
    include_once("../config.php");

  $Elemento = 0;

  if(isset($_POST["clave"])){
    $clave=$_POST["clave"];
    $descripcion=$_POST["descripcion"];
  
    $cont=0;
    $consulta="SELECT * FROM elementos";
    $elemento=$db_PDO->query($consulta);
    while($fila=$elemento->fetch()){
    
      $cont = $cont + 1;
  }
  
    $idElemento=$cont + 1;
    $alta="INSERT INTO elementos (idElemento, clave, descripcion) VALUES (:idElemento, :clave, :descripcion)";
    $sentencia=$db_PDO->prepare($alta);
    $sentencia->bindValue(":idElemento", $idElemento);
    $sentencia->bindValue(":clave", $clave);
    $sentencia->bindValue(":descripcion", $descripcion);
    $sentencia->execute();
  }

  include("consultaElemento.php");
?>