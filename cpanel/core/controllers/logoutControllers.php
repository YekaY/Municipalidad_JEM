<?php




unset($_SESSION['nombre']);

session_destroy();
header('location:?view=index');
