<?php

include '../CRUD/CRUD.php';

$crud = new crud();
$data_back = json_decode(file_get_contents('php://input'));
 
// set json string to php variables
//echo $data_back->{"email"};
$email= $data_back->{"email"};
$usernam =  $data_back->{"username"};

$sql = 'SELECT * FROM mdl_user WHERE email = "'.$email.'" AND username ="'.$usernam.'"';
$resp = $crud->consultar($sql);


$jsonRespn[] = array('resp'=> $resp);
header('Content-Type: application/json');
 
echo json_encode($jsonRespn);
?>