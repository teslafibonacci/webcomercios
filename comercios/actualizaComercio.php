<?php
  include_once("../config.php");

    if(isset($_POST["idComercio"])){

      $idComercio=$_POST["idComercio"];
      $comercio=$_POST["comercio"];

      $actualizar = "UPDATE comercios SET comercio = '".$comercio."' WHERE idComercio = '".$idComercio."'";
      $comercio=$db_PDO->query($actualizar);
    }

  include("modificaComercio.php");
?>