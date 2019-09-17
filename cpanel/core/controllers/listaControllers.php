<?php

$template = new smarty();
if ($_SESSION['nombre'] != "") {

  $db = new Conexion();

  $sql = $db->query("SELECT * FROM usuario ORDER BY id ASC");
  while ($x = $db->rrecorrer($sql)) {
    # code...
    $posts[] = array(
      'id' => $x['id'],
      'nombre' => $x['nombre'],
      'correo' => $x['correo'],
      'nick' => $x['nick'],
      'fecha' => $x['fecha']


    );
  }
  $template->assign('posts', $posts);

  $template->display('public/lista.tpl');
} else {

  header('location:?view=index');
}
