<?php

$template = new smarty();
if ($_SESSION['nombre'] != "") {

    $db = new Conexion();

    $sql = $db->query("SELECT * FROM directorio ORDER BY id ASC");

    while ($x = $db->rrecorrer($sql)) {
        # code...
        $posts[] = array(
            'id' => $x['id'],
            'nombre' => $x['nombre'],
            'tipo' => $x['tipo'],
            'descripcion' => $x['descripcion'],
            'direccion' => $x['direccion'],
            'telefono' => $x['telefono'],
            'pagina' => $x['pagina'],
            'imagen' => $x['imagen']
        );
    }

    $template->assign('posts', $posts);
    $template->display('public/listaDirectorio.tpl');
} else {

    header('location:?view=index');
}
