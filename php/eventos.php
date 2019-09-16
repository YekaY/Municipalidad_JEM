<?php
	header('Content-Type: application/json');
	$pdo=new PDO('mysql:localhost=127.0.0.1;dbname=bd_molle;charset=utf8','root','');//creando la conexion con BD

	$accion=(isset($_GET['accion']))?$_GET['accion']:'leer';

	switch ($accion) {
		case 'agregar':
			$query=$pdo->prepare("INSERT INTO evento(title,descripcion,start,end) VALUES(:title,:descripcion,:start,:end)");
			$respuesta=$query->execute(array(
					"title"=>$_POST['title'],
					"descripcion"=>$_POST['descripcion'],
					"start"=>$_POST['start'],
					"end"=>$_POST['end']
				));
			echo json_encode($respuesta);
			break;

		case 'eliminar':
			$respuesta=false;
			if (isset($_POST['id'])) {
				$query=$pdo->prepare("DELETE FROM evento WHERE id=:id");
				$respuesta=$query->execute(array("id"=>$_POST['id']));
			}
			echo json_encode($respuesta);
			break;

		case 'modificar':
			$query=$pdo->prepare("UPDATE evento SET
				title=:title,
				descripcion=:descripcion,
				start=:start,
				end=:end 
				WHERE id=:id
				");
			$respuesta=$query->execute(array(
				"id"=>$_POST['id'],
				"title"=>$_POST['title'],
				"descripcion"=>$_POST['descripcion'],
				"start"=>$_POST['start'],
				"end"=>$_POST['end']
				));
			echo json_encode($respuesta);
			break;

		default:
			$consultaSQL=$pdo->prepare("SELECT * FROM evento");//creando la consulta a la tabla evento
			$consultaSQL->execute();//ejecutando la consulta
			$resultado=$consultaSQL->fetchAll(PDO::FETCH_ASSOC);//convirtiendo los resultados de la consulta a un array
			echo json_encode($resultado);//codificando los resultados a un formato json
			break;
	}

	
?>