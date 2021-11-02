<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1" />
    <link rel=stylesheet href=css/estilo.css />
    <link rel=stylesheet href=css/monstrar.css />
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
              require_once("php/conf_bd.php");

          
      
              /*$conexion = new mysqli(HOSTNAME,USERNAME,CONTRASENA,NOMBREBD);
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
              */
              mostrar();
        ?>
      </main>
    </div>
    <!--<footer>h</footer>-->
  </body>
</html>
<?php
  function mostrar()
  {
    $conexion = new mysqli(HOSTNAME,USERNAME,CONTRASENA,NOMBREBD);
    $consultaTodos="SELECT * FROM empleados";
    $resultado=$conexion->query($consultaTodos);
    echo "<table><tr>
            <th>Nombre</th> <th> DNI </th><th> Acción </th></tr>";
    while($fila = $resultado->fetch_assoc())
      {
              echo"<tr>
                <td> ".$fila['nombre'] ."</td><td>". $fila['dni']."</td>
                <td><a href='decision.php?idEmpleado=".$fila['idEmpleado']."&op=b'>   <input type = 'submit' onclick=' name = 'borrar' value='Borrar' /></a><br/>
                <a href='decision.php?idEmpleado=".$fila['idEmpleado']."&op=m'> <input type = 'submit' onclick=' name = 'modificar' value='Modificar' /></a></td>";
      }
      echo '</tr></table><br />
      <a href="decision.php?op=a">
         <input type = "submit" onclick="" name = "alta" value="Alta" />
       </a>';
  }
            
?>