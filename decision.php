<?php
    switch ($_GET['op']) {
        case 'b':
            header("Location:borrar.php?idEmpleado=".$_GET['idEmpleado']);
            break;
        case 'm':
            header("Location:modificar.php?idEmpleado=".$_GET['idEmpleado']); 
            break;
        case 'a':
            header("Location:alta.php");  
            break;
    }
    /*echo"<tr>
    <td> ".$fila['nombre'] ."</td><td>". $fila['dni']."</td>
    <td><a href='decision.php?idEmpleado=".$fila['idEmpleado']."&op=b'>   <input type = 'submit' onclick=' name = 'borrar' value='Borrar' /></a><br/>
    <a href='decision.php?op=m&idEmpleado=".$fila['idEmpleado']."'> <input type = 'submit' onclick=' name = 'modificar' value='Modificar' /></a></td>";
    */
?> 
