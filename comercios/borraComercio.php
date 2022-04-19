<?php
  include_once("../config.php");

    if(isset($_POST["idComercio"])){
      $idComercio=$_POST["idComercio"];

      $borrar = "DELETE FROM comercios WHERE idComercio = ?";
      $comercio=$db_PDO->prepare($borrar);
      $comercio->execute([$idComercio]);
    }

  include("bajaComercio.php");
?>