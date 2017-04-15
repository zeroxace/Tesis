<?php

include '../CRUD/CRUD.php';

$crud = new crud();
$data_back = json_decode(file_get_contents('php://input'));

// set json string to php variables
//echo $data_back->{"email"};


$id_profesor = $_POST["id_profesor"];
$nombres = $_POST["nombres"];
$contrasena = $_POST["contrasena"];
$grado = $_POST["grado"];
$identificacion = $_POST["identificacion"];
$tipoUsuario = $_POST["tipoUsuario"];

$sql = '
INSERT INTO u611574828_moodl.estudiante 
	( 
	id_profesor, 
	nombres, 
	identificacion, 
	grado, 
	contrasena,
        tipoUsuario
	)
	VALUES
	( 
	' . $id_profesor . ', 
	"' . $nombres . '",
        "' . $identificacion . '", 
	"' . $grado . '", 
	"' . $contrasena . '",
        "' . $tipoUsuario . '"
	)';

$resp = $crud->insertar($sql);

$jsonRespn[] = array('resp' => $resp);
header('Content-Type: application/json');

echo json_encode($jsonRespn);
?>