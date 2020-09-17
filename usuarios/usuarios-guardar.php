<?php
include("../conexion.php");
$conexion->query("INSERT INTO usuarios(usr_login, usr_clave, usr_nombre, usr_email)VALUES('".$_POST["usuario"]."', '".$_POST["clave"]."', '".$_POST["nombre"]."', '".$_POST["email"]."')");
#if ($conexion->mysqli_errno) {echo "Fallo: (" . $conexion->mysqli_errno . ") " . $conexion->mysqli_error; exit();}

echo '<script type="text/javascript">window.location.href="usuarios.php?msg=1";</script>';