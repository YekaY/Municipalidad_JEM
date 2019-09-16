<?php

$nombre             =$_POST["nombre"];
$tipo               =$_POST["tipo"];
$descripcion        =$_POST["descripcion"];
$direccion          =$_POST["direccion"];
$telefono           =$_POST["telefono"];
$pagina             =$_POST["pagina"];
$logo               =$_POST["logo"];



// realiza la conexion
$con = new mysqli("localhost","root","","cca");
$con->set_charset("utf8");



$query = $con->prepare("INSERT INTO t_directorio(tipo, nombre, descripcion, direccion, telefono, pagina_web, imagen) VALUES (?,?,?,?,?,?,?)");
$query->bind_param("sssssss",$tipo,$nombre,$descripcion,$direccion,$telefono,$pagina,$logo);

$query->execute();

echo "correcto";
$con->close();
exit();

?>