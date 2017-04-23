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
$numeroPregunta=$_POST["numeroPregunta"];

$sql = 'INSERT INTO u611574828_moodl.Preguntas 
	( 
	id_profesor, 
	descripcion, 
	respuestaA, 
	respuestaB, 
	respuestaC, 
	respuestaVerdadera,
        numeroPregunta
	)
	VALUES
	( 
	"'.$id_profesor.'", 
	"'.$descripcion.'", 
	"'.$respuestaA.'", 
	"'.$respuestaB.'", 
	"'.$respuestaC.'", 
	"'.$respuestaVerdadera.'",
        "'.$numeroPregunta.'"
	);
';

$resp = $crud->insertar($sql);

if($respuestaVerdadera=="A"){
    $jsonRespn[] = array('resp'=> $resp,'dato1'=> 'DSD');
}
if($respuestaVerdadera=="B"){
    $jsonRespn[] = array('resp'=> $resp,'dato1'=> 'DSD','dato2'=> 'DSD');
}
if($respuestaVerdadera=="C"){
    $jsonRespn[] = array('resp'=> $resp,'dato1'=> 'DSD','dato2'=> 'DSD','dato3'=> 'DSD');
}


header('Content-Type: application/json');
 
echo json_encode($jsonRespn);
?>