<?php
  include_once("../config.php");

    if(isset($_POST["idFabricante"]));{

      $idFabricante=$_POST["idFabricante"];
      $fabricante=$_POST["fabricante"];

      $actualizar = "UPDATE fabricantes SET fabricante = '".$fabricante."' WHERE idFabricante = '".$idFabricante."'";
      $fabricante=$db_PDO->query($actualizar);
    }

  include("modificaFabricante.php");
?>