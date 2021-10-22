<?php
    function formulario($idEmpleado, $conexion)
    {
      $consultaDni="SELECT * FROM empleados WHERE idEmpleado='".$idEmpleado."';";
      $resultadoDni=$conexion->query($consultaDni);
      $fila= $resultadoDni->fetch_assoc();
        echo"<form action='modificar.php' method='POST'>
        <fieldset>
          <legend>EMPLEADO</legend>
			    <label for='nombre'>Nombre*   </label>
          <input name='nombre' type='text'  value='".$fila['nombre']."' size='30' /><br/><br/>
          <label for='Dni'>DNI*   </label>
          <input name='dni' type='text' value='".$fila['dni']."' size='30'/><br/><br/>
          <label for='Dni'>Correo   </label>
          <input name='correo' type='text' value='".$fila['correo']."'  size='30' /><br/><br/>
          <label for='telefono'>Telefono*   </label>
          <input name='telefono' type='text' value='".$fila['telefono']."'  size='30' /><br/><br/>
          <input name='idEmpleado' type='hidden' value='".$fila['idEmpleado']."' />
          <input type = 'submit' onclick=' name = 'enviar' value='Actualizar' /><br />
      </form>";
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Modificar</title>
	</head>
  <body>
        <?php
            require_once("php/conf_bd.php");
            $conexion = new mysqli(HOSTNAME,USERNAME,CONTRASENA,NOMBREBD);
            //echo $conexion->connect_errno;
            if(!($_POST))
            {
                formulario($_GET['idEmpleado'], $conexion);
            }
            else
            {
                $alta="UPDATE empleados
                SET dni='".$_POST['dni']."', nombre='".$_POST['nombre']."', correo='".$_POST['correo']."', telefono='".$_POST['telefono']."' WHERE idEmpleado='".$_POST['idEmpleado']."';";
                //echo $alta;
                
                $resultado=$conexion->query($alta);
                if (!$resultado) //Para comprobar si la consulta se ha realizado con exito
                {
                  //echo "Código de error: ". $conexion->errno; //montrar el numero del error
                  //echo " Errormessage: ". $conexion->error; //monstrar la informacion del error
                  echo 'No se ha podido actualizar los datos';
                }
                else {
                  echo 'Se ha actualizado correctamente';
                }
              }
            echo '<br />
                  <a href="monstrar.php">
                      <input type = "submit" onclick="" name = "Volver" value="Volver"/>
                   </a>';
        ?>
  </body>
</html>
