<?php

include_once 'conection.php';


class crud {

    function __construct() {
        
    }

     function consultar($sql) {
        
        $conexion = new conexion();
        $pdo = $conexion->conect();
        $sql = $pdo->prepare($sql);
        $results = $sql->execute();
        $rows = $sql->fetchAll(\PDO::FETCH_OBJ);
        
        return $rows;
    }

 
    
    
}