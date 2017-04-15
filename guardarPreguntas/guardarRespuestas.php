<?php

include '../CRUD/CRUD.php';

$crud = new crud();
$data_back = json_decode(file_get_contents('php://input'));
 
// set json string to php variables
//echo $data_back->{"email"};

$id_profesor=$_POST["id_profesor"];
$descripcion=$_POST["descripcion"];
$respuestaA=$_POST["respuestaA"];
$respuestaB=$_POST["respuestaB"]; 
$respuestaC=$_POST["respuestaC"];
$respuestaVerdadera=$_POST["respuestaVerdadera"];
$sql = 'INSERT INTO u611574828_moodl.Preguntas 
	( 
	id_profesor, 
	descripcion, 
	respuestaA, 
	respuestaB, 
	respuestaC, 
	respuestaVerdadera
	)
	VALUES
	( 
	"'.$id_profesor.'", 
	"'.$descripcion.'", 
	"'.$respuestaA.'", 
	"'.$respuestaB.'", 
	"'.$respuestaC.'", 
	"'.$respuestaVerdadera.'"
	);
';

$resp = $crud->insertar($sql);

$jsonRespn[] = array('resp'=> $resp);
header('Content-Type: application/json');
 
echo json_encode($jsonRespn);
?>