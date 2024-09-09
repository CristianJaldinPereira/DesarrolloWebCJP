<?php include 'conexion.php';
$sql="SELECT id, email, nivel FROM usuario";
$resultado=$con->query($sql);
?>
<table>
    <tr>
        <th>id</th>
        <th>email</th>
        <th>nivel</th> 

    </tr>
    <?php while($fila=$resultado->fetch_assoc()) 
    {?>
    <tr>
        <td><?php echo $fila['id'];?></td>
        <td><?php echo $fila['email'];?></td>
        <td><?php echo $fila['nivel'];?></td>
        <td><a href="form_update_usuario.php?id=<?php echo $fila['id'];?>">Editar</a> 
        
        <a href="delete_usuario.php?id=<?php echo $fila['id'];?>">Eliminar</a>

        
        
    </tr>

    <?php }?>
   

</table>

<a href="form_create_usuario.html">Registrar nuevo</a>
