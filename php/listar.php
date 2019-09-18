<?php

$limit = isset($_POST["limit"]) && intval($_POST["limit"]) > 0 ? intval($_POST["limit"])	: 10;
$offset = isset($_POST["offset"]) && intval($_POST["offset"]) >= 0	? intval($_POST["offset"])	: 0;
$tipo = $_POST["tipo"];
if ($tipo == "1") {
	$tipo = "Obras_Principales";
}
if ($tipo == "2") {
	$tipo = "Obras_Entregadas";
}
if ($tipo == "3") {
	$tipo = "Obras_en_Ejecucion";
}
if ($tipo == "4") {
	$tipo = "Obras_en_Proyecto";
}


// realiza la conexion
$con = new mysqli("localhost", "root", "usbw", "ccapurimac");
$con->set_charset("utf8");

// array para devolver la informacion
$json = array();
$data = array();
//consulta que deseamos realizar a la db	
/* Execute a prepared statement by binding PHP variables */

//$tipo =  "accesorio";


$query = $con->prepare("SELECT nombre,descripcion,direccion,telefono,pagina,imagen FROM directorio  where tipo=? limit ? offset ?");
$query->bind_param("sii", $tipo, $limit, $offset);

$query->execute();

// vincular variables a la sentencia preparada 
$query->bind_result($nombre, $descripcion, $direccion, $telefono, $pagina_web, $imagen);

// obtener valores 
while ($query->fetch()) {
	$data_json = array();
	$data_json["nombre"] = $nombre;
	$data_json["descripcion"] = $descripcion;
	$data_json["direccion"] = $direccion;
	$data_json["telefono"] = $telefono;
	$data_json["pagina_web"] = $pagina_web;
	$data_json["imagen"] = $imagen;
	$data[] = $data_json;
}

// obtiene la cantidad de registros
$cantidad_consulta = $con->query("select count(*) as total from directorio where tipo='" . $tipo . "'");
$row = $cantidad_consulta->fetch_assoc();
$cantidad['cantidad'] = $row['total'];

$json["lista"] = array_values($data);
$json["cantidad"] = array_values($cantidad);

// envia la respuesta en formato json		
header("Content-type:application/json; charset = utf-8");
echo json_encode($json);
$con->close();
exit();
