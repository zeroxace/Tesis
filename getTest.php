<?php

include 'CRUD/CRUD.php';

class gettest {

    function __construct() {
        
    }

    function consultar_test() {

        $crud = new crud();

        
        $sql = "SELECT str_nombres,str_apellidos,dtm_fecha_nacimiento FROM w001_usuarios LEFT JOIN w000_companias ON w001_usuarios.num_id_cia = w000_companias.num_id_cia";
        
        $resp = $crud->consultar($sql);
        header('Content-Type: application/json');
        echo json_encode($resp);
        
        
//        foreach ($resp as $row) {
//            print($row->str_nombres);
//            print($row->str_apellidos);
//            print "<br />";
//        }
    }

    
    function consultar_user() {
        
        $crud = new crud();

        
        $sql = "SELECT * FROM mdl_assignfeedback_comments";
        echo $sql;
        $resp = $crud->consultar($sql);
        header('Content-Type: application/json');
        echo json_encode($resp);
        
        
    }
}

$getest = new gettest();
$getest->consultar_user();

//$getest->consultar_test();
?>