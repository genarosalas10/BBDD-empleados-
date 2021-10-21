<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Monstrar</title>
	</head>
  <body>
        <?php
            require_once("php/conf_bd.php");
             $conexion = new mysqli(HOSTNAME,USERNAME,CONTRASENA,NOMBREBD);
             $consultaTodos="SELECT * FROM empleados";
             $resultado=$conexion->query($consultaTodos);
             while($fila = $resultado->fetch_assoc())
             {
               echo "<b>Nombre: ".$fila['nombre'] ."</b> DNI: ". $fila['dni']. 
               "<a href='borrar.php?idEmpleado=".$fila['idEmpleado']."'> eliminar</a>
               <a href='modificar.php?idEmpleado=".$fila['idEmpleado']."'> modificar</a>";
               echo "<br/><br/>";
             }
        ?>
  </body>
</html>