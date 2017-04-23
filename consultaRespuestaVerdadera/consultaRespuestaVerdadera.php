<?php

include '../CRUD/CRUD.php';

$crud = new crud();
$data_back = json_decode(file_get_contents('php://input'));
 
// set json string to php variables
//echo $data_back->{"email"};
$id_profesor = $_POST["id_profesor"];
$id_pregunta = $_POST["id_pregunta"];

$sql = 'SELECT * FROM Preguntas WHERE id_profesor='.$id_profesor.' AND id_preguntas='.$id_pregunta.'';
$resp = $crud->consultar($sql);



foreach ($resp as $row) {
    $resCorrecta=($row->respuestaVerdadera);
   
}

if($resCorrecta=="A"){
    $jsonRespn[] = array('resp'=> $resp,'dato1'=> 'DSD');
}
if($resCorrecta=="B"){
    $jsonRespn[] = array('resp'=> $resp,'dato1'=> 'DSD','dato2'=> 'DSD');
}
if($resCorrecta=="C"){
    $jsonRespn[] = array('resp'=> $resp,'dato1'=> 'DSD','dato2'=> 'DSD','dato3'=> 'DSD');
}


header('Content-Type: application/json');
 
//echo json_encode($jsonRespn);
?>