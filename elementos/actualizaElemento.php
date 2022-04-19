<?php
    include_once("../config.php");

        if(isset($_POST["idElemento"])){
        $idElemento=$_POST["idElemento"];
        $clave=$_POST["clave"];
        $descripcion=$_POST["descripcion"];

        if(strlen($clave) == 3){
            $mensaje = "clave = '".$clave."'";
        }

        if(strlen($descripcion) > 0){
            $mensaje = "descripcion = '".$descripcion."'";
        }

        if(strlen($descripcion) > 0 && strlen($clave) == 3){
            $mensaje = "clave = '".$clave."', descripcion = '".$descripcion."'";
        }

        $actualizar = "UPDATE elementos SET ".$mensaje."
                        WHERE idElemento = '".$idElemento."'";
        $idElemento=$db_PDO->query($actualizar);
        }

    include("modificaElemento.php");
?>