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
             while($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC))
             {
               echo "<b>Nombre: ".$fila['nombre'] ."</b> DNI: ". $fila['dni']. 
               "<a href='http://localhost/ejercicios/POOyBD(Empleados)/borrar.php?idEmpleado=".$fila['idEmpleado']."'> eliminar</a>
               < a href='http://localhost/ejercicios/POOyBD(Empleados)/modificar.php?idEmpleado=".$fila['idEmpleado']."'> modificar</a>";
               echo "<br/><br/>";
             }
        ?>
  </body>
</html>