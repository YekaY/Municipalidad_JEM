<?php

$limit = isset($_POST["limit"]) && intval($_POST["limit"]) > 0 ? intval($_POST["limit"])	: 10;
$offset = isset($_POST["offset"]) && intval($_POST["offset"]) >= 0	? intval($_POST["offset"])	: 0;
$tipo = $_POST["tipo"];
if ($tipo == "1") {
	$tipo = "Accesorios";
}
if ($tipo == "2") {
	$tipo = "Administradoras_de_Fondos_de_Pensiones";
}
if ($tipo == "3") {
	$tipo = "Agroindustrial";
}
if ($tipo == "4") {
	$tipo = "Agropecuario";
}
if ($tipo == "5") {
	$tipo = "Alimentos_Bebidas_e_Insumos";
}
if ($tipo == "6") {
	$tipo = "Capacitaciones_y_Recursos_Humanos";
}
if ($tipo == "7") {
	$tipo = "Comercio_Exterior";
}
if ($tipo == "8") {
	$tipo = "Compañias_de_Seguros";
}
if ($tipo == "9") {
	$tipo = "Comunicaciones";
}
if ($tipo == "10") {
	$tipo = "Constructora";
}
if ($tipo == "11") {
	$tipo = "Consultorias_y_Asesorias";
}
if ($tipo == "12") {
	$tipo = "Corredores_de_Seguros";
}
if ($tipo == "13") {
	$tipo = "Diversos";
}
if ($tipo == "14") {
	$tipo = "Educación";
}
if ($tipo == "15") {
	$tipo = "Estructuras_Metálicas_Madera_y_Concreto";
}
if ($tipo == "16") {
	$tipo = "Fondos_Colectivos";
}
if ($tipo == "17") {
	$tipo = "Industriales";
}
if ($tipo == "18") {
	$tipo = "Información_Jurídica";
}
if ($tipo == "19") {
	$tipo = "Inmobiliaria";
}
if ($tipo == "20") {
	$tipo = "Instituciones_Financieras_y_de_Crédito";
}
if ($tipo == "21") {
	$tipo = "Jurídicos_y_Notarias";
}
if ($tipo == "22") {
	$tipo = "Marketing_y_Publicidad";
}
if ($tipo == "23") {
	$tipo = "Mayorista";
}
if ($tipo == "24") {
	$tipo = "Micro_Finanzas";
}
if ($tipo == "25") {
	$tipo = "Mineras";
}
if ($tipo == "26") {
	$tipo = "Minorista";
}
if ($tipo == "27") {
	$tipo = "Proveedores_de_Construcción";
}
if ($tipo == "28") {
	$tipo = "Proveedores_de_Mineria";
}
if ($tipo == "29") {
	$tipo = "Salud";
}
if ($tipo == "30") {
	$tipo = "Seguridad";
}
if ($tipo == "31") {
	$tipo = "Servicios";
}
if ($tipo == "32") {
	$tipo = "Tecnologías_de_Información_y_Comunicaciones";
}
if ($tipo == "33") {
	$tipo = "Textil_Calzado_y_Joyeria";
}
if ($tipo == "34") {
	$tipo = "Transporte";
}
if ($tipo == "35") {
	$tipo = "Turismo";
}
if ($tipo == "36") {
	$tipo = "Vehículos_Mayores";
}
if ($tipo == "37") {
	$tipo = "Vehículos_Menores";
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
