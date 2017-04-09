<?php

include '../CRUD/CRUD.php';

$crud = new crud();
$data_back = json_decode(file_get_contents('php://input'));
 
// set json string to php variables
//echo $data_back->{"email"};

$sql = 'SELECT question id,questiontext,answer,fraction FROM mdl_question INNER JOIN mdl_question_answers ON mdl_question.id=mdl_question_answers.question ';
$resp = $crud->consultar($sql);


$jsonRespn[] = array('resp'=> $resp);
header('Content-Type: application/json');
 
echo json_encode($jsonRespn);
?>