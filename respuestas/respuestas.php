<?php

include '../CRUD/CRUD.php';

$crud = new crud();
$data_back = json_decode(file_get_contents('php://input'));
 
// set json string to php variables
//echo $data_back->{"email"};
$id_profesor = $_POST["id_profesor"];

$sql = 'SELECT * FROM Preguntas WHERE id_profesor='.$id_profesor.'';
$resp = $crud->consultar($sql);




$jsonRespn[] = array('resp'=> $resp);
header('Content-Type: application/json');
 
echo json_encode($jsonRespn);
?>