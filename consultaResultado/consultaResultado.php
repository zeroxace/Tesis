<?php

include '../CRUD/CRUD.php';

$crud = new crud();
$data_back = json_decode(file_get_contents('php://input'));
 
// set json string to php variables
//echo $data_back->{"email"};
$id_estudiante = $_POST["id_estudiante"];

$sql = 'SELECT puntaje  FROM juego_respuestas WHERE id_estudiante='.$id_estudiante.'';
$resp = $crud->consultar($sql);

$total=0;

foreach ($resp as $row) {
    $puntaje=($row->puntaje);
   $total = $total+$puntaje;
}

$jsonRespn[] = array('resp'=> $total);
header('Content-Type: application/json');
 
echo json_encode($jsonRespn);
?>