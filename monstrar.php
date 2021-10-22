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
               echo "<b>Nombre:</b> ".$fila['nombre'] ."<b> DNI: </b>". $fila['dni']. 
               "  <a href='borrar.php?idEmpleado=".$fila['idEmpleado']."'>   <input type = 'submit' onclick=' name = 'borrar' value='Borrar' /></a>
              <a href='modificar.php?idEmpleado=".$fila['idEmpleado']."'> <input type = 'submit' onclick=' name = 'modificar' value='Modificar' /></a>";
               echo "<br/><br/>";
             }
             echo '<br />
                   <a href="alta.php">
                       <input type = "submit" onclick="" name = "alta" value="Alta" />
                    </a>';
        ?>
  </body>
</html>