<?php
    
    //$eliminarr="DELETE FROM empleados WHERE idEmpleado='".$_GET['idEmpleado']."';";
   // $resultado=$conexion->query($borrar);
?>
 <html>
	<head>
		<meta charset="utf-8">
		<title>Borrar</title>
        <link rel=stylesheet href=css/estilo.css />
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
                $conexion = new mysqli(HOSTNAME,USERNAME,CONTRASENA,NOMBREBD);
                if(($_GET))
                {
                    $s='s';
                    $consultaDni="SELECT * FROM empleados WHERE idEmpleado='".$_GET['idEmpleado']."';";
                    $resultadoDni=$conexion->query($consultaDni);
                    $fila= $resultadoDni->fetch_assoc();
                echo "<b>¿Quieres borrar a ".$fila['nombre']." con DNI=  ".$fila['dni']."? </b>";
                    //echo "<a href='borrar.php?".$borrar."=".$s."&".$id."=".$_GET['idEmpleado']."'>Borrar</a>";
                    //echo '<a href="monstrar.php">Cancelar</a>';
                    formulario();
                }
                else
                {
                    $eliminar="DELETE FROM empleados WHERE idEmpleado='".$_POST['idEmpleado']."';";
                    $resultado=$conexion->query($eliminar);
                    if($resultado)
                    {
                        echo "Se ha borrado correctamente";
                    }
                else 
                {
                    echo "Código de error: ". $conexion->errno; //montrar el numero del error
                    echo " Errormessage: ". $conexion->error; //monstrar la informacion del error
                }
                echo '<a href="monstrar.php">Volver</a>';
                }
            
            ?>
        </main>
    </div>
  </body>
</html>
<?php
    function formulario()
    {  
       
        echo'<form action="borrar.php" method="POST">
            <input name="idEmpleado" type="hidden" value="'.$_GET['idEmpleado'].'" />
            <input type = "submit" onclick="" name = "borrar" value="Borrar" />
            </form>
            <a href="monstrar.php"><input type = "submit" onclick="" name = "Volver" value="cancelar" /></a>';
    }
?>