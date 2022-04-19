<?php
    try{
        $servidor="localhost";
        $usuario="root";
        $passwd="";
        $db="compras";
        $db_PDO=new PDO("mysql:host=$servidor;dbname=$db; charset=utf8", $usuario, $passwd);
    } catch (PDOException $e){
        echo "Error al intentar la conexion";
    }
?>