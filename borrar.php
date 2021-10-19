<?php
    require_once("php/conf_bd.php");
    $conexion = new mysqli(HOSTNAME,USERNAME,CONTRASENA,NOMBREBD);
    $borrar="DELETE FROM empleados WHERE idEmpleado='".$_GET['idEmpleado']."';";
    $resultado=$conexion->query($borrar);
?>