<?php

include '../CRUD/CRUD.php';

$crud = new crud();
$data_back = json_decode(file_get_contents('php://input'));
 
// set json string to php variables
//echo $data_back->{"email"};

$id_pregunta=$_POST["id_pregunta"];
$id_estudiante=$_POST["id_estudiante"];
$puntaje=$_POST["puntaje"];
$id_profesor=$_POST["id_profesor"]; 
$respuesta=$_POST["respuesta"];

$sql = '
INSERT INTO u611574828_moodl.juego_respuestas 
	( 
	id_pregunta, 
	id_estudiante, 
	puntaje, 
	id_profesor, 
	respuesta
	)
	VALUES
	( 
	'.$id_pregunta.', 
	'.$id_estudiante.', 
	'.$puntaje.', 
	'.$id_profesor.', 
	"'.$respuesta.'"
	)';

$resp = $crud->insertar($sql);

$jsonRespn[] = array('resp'=> $resp);
header('Content-Type: application/json');
 
echo json_encode($jsonRespn);
?>