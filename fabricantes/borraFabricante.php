<?php
  include_once("../config.php");

    if(isset($_POST["idFabricante"])){
      $idFabricante=$_POST["idFabricante"];

      $borrar = "DELETE FROM fabricantes WHERE idFabricante = ?";
      $fabricante=$db_PDO->prepare($borrar);
      $fabricante->execute([$idFabricante]);
    }

  include("bajaFabricante.php");
?>