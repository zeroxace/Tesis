<?php

include '../CRUD/CRUD.php';

$crud = new crud();
$data_back = json_decode(file_get_contents('php://input'));
 
// set json string to php variables
//echo $data_back->{"email"};
$identificacion=$_POST["identificacion"];
$contrasena = $_POST["contrasena"];

$sql = 'SELECT * FROM estudiante WHERE contrasena="'.$contrasena.'" AND identificacion="'.$identificacion.'"';
$resp = $crud->consultar($sql);


$jsonRespn[] = array('resp'=> $resp);
header('Content-Type: application/json');
 
echo json_encode($jsonRespn);
?>