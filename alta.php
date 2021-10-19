<?php
    function formulario()
    {
        echo'<form action="alta.php" method="POST">
        <fieldset>
          <legend>INTRODUCIR EMPLEADO</legend>
			    <label for="nombre">Introduzca nombre*   </label>
          <input name="nombre" type="text"  placeholder="nombre" size="30" /><br/><br/>
          <label for="Dni">Introduzca DNI*   </label>
          <input name="dni" type="text"  placeholder="99999999Y" size="30" /><br/><br/>
          <label for="Dni">Introduzca Correo   </label>
          <input name="correo" type="text"  placeholder="nombre@gmail.com" size="30" /><br/><br/>
          <label for="telefono">Introduzca Telefono*   </label>
          <input name="telefono" type="text"  placeholder="924252521" size="30" /><br/><br/>
          <input type = "submit" onclick="" name = "enviar" value="Enviar" id="boton"/>
      </form>';
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Alta</title>
	</head>
  <body>
        <?php
            if(!($_POST))
            {
                formulario();
              }
              else
              {
                if($_POST['nombre']!="" || $_POST['correo']!=""  || $_POST['telefono']!="" )
                {

                require_once("php/conf_bd.php");
                $conexion = new mysqli(HOSTNAME,USERNAME,CONTRASENA,NOMBREBD);
                //echo $conexion->connect_errno;
                $alta="INSERT INTO empleados (dni,nombre,correo,telefono) VALUES 
                ('".$_POST['dni']."','".$_POST['nombre']."','".$_POST['correo']."','".$_POST['telefono']."');";
                echo $alta;
                
                $resultado=$conexion->query($alta);
                if (!$resultado) //Para comprobar si la consulta se ha realizado con exito
                {
                  echo "Código de error: ". $conexion->errno; //montrar el numero del error
                  echo " Errormessage: ". $conexion->error; //monstrar la informacion del error
                }
              }
              else {
                echo "rellena todos los campos obligatorio";
              }
            echo '<br />
                  <a href="http://localhost/ejercicios/POOyBD(Empleados)/alta.php">
                      <input type = "submit" onclick="" name = "Volver" value="Volver" id="boton"/>
                   </a>';
            }
        ?>
  </body>
</html>
