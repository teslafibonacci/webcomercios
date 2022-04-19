<?php
    include_once("../config.php");

        if(isset($_POST["idElemento"])){
        $idElemento=$_POST["idElemento"];

        $borrar = "DELETE FROM elementos WHERE idElemento = ?";
        $elemento=$db_PDO->prepare($borrar);
        $elemento->execute([$idElemento]);
        }

    include("bajaElemento.php");
?>