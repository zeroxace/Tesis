<?php

$data_back = json_decode(file_get_contents('php://input'));
 
// set json string to php variables
//echo $data_back->{"email"};


$dato = $_POST["dato"];

$resp= $dato + 4;

$jsonRespn[] = array('dato'=> $resp);
header('Content-Type: application/json');
 
echo json_encode($jsonRespn);
?>