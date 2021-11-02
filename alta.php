<?php
    function formulario()
    {
        echo'<form action="alta.php" method="POST">
        <fieldset>
			    <label for="nombre">Introduzca nombre*   </label>
          <input name="nombre" type="text"  placeholder="nombre" size="30" /><br/><br/>
          <label for="Dni">Introduzca DNI*   </label>
          <input name="dni" type="text"  placeholder="99999999Y" size="30" /><br/><br/>
          <label for="Dni">Introduzca Correo   </label>
          <input name="correo" type="text"  placeholder="nombre@gmail.com" size="30" /><br/><br/>
          <label for="telefono">Introduzca Telefono*   </label>
          <input name="telefono" type="text"  placeholder="924252521" size="30" /><br/><br/>
          <input type = "submit" onclick="" name = "enviar" value="Enviar" /><br />
        </fieldset>
      </form>';
      echo '<br />
      <a href="monstrar.php">
          <input type = "submit" onclick="" name = "Volver" value="Listado" id="boton"/>
       </a>'; 
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Alta</title>
    <link rel=stylesheet href=css/estilo.css />
    <link rel=stylesheet href=css/formulario.css />
  </head>
		<title>Monstrar</title>
	</head>
  <body>
  <header>
        widmark S.L.
    </header>
    <nav></nav>
    <div>
      <aside></aside>
      <main>
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
                //echo $alta;
                
                $resultado=$conexion->query($alta);
                if (!$resultado) //Para comprobar si la consulta se ha realizado con exito
                {
                  //echo "Código de error: ". $conexion->errno; //montrar el numero del error
                  //echo " Errormessage: ". $conexion->error; //monstrar la informacion del error
                  echo 'No se pudieron guardar los datos';
                }
                else 
                {
                  echo 'Se han guardado los datos';
                }
              }
              else {
                echo "rellena todos los campos obligatorio";
              }
               echo '<br />
                  <a href="alta.php">
                      <input type = "submit" onclick="" name = "Volver" value="Volver" id="boton"/>
                   </a>';
                   echo '<br />
                   <a href="monstrar.php">
                       <input type = "submit" onclick="" name = "Volver" value="Listado" id="boton"/>
                    </a>';   
            }
            
        ?>
      </main>
    </div>
  </body>
</html>
