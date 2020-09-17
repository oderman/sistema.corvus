<?php
include("../conexion.php");
$conexion->query("INSERT INTO remisiones(rem_fecha, rem_cliente, rem_equipo, rem_referencia, rem_estado)VALUES(now(), '".$_POST["cliente"]."', '".$_POST["equipo"]."', '".$_POST["ref"]."', 1)");
if ($conexion->connect_errno) {echo "Fallo: (" . $conexion->connect_errno . ") " . $conexion->connect_error;}

echo '<script type="text/javascript">window.location.href="remisiones.php?msg=1";</script>';