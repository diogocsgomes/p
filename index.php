<?php
include('conectaBD.php');
session_start();

	$sql = "SELECT * FROM salas";

	$salas = mysqli_query($conn,$sql);
if (! $_SESSION['username'] or ! $_SESSION['id'])
{
    header('location:login.html');
}

?>




<!DOCTYPE html>
<html>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<table align="center">
    <a href="CriarSala.php">Crie a sua sala</a><p></p>
    <a href="upload1.php">Inserir ficheiros</a>
</table>

<!--
<table>
<th scope="col">AS Minhas salas</th>
<th scope="col">|Codigo</th>
<th scope="col">|Ver sala</th>



</table>
     --->                             
</html>
<?php 
                        
                        $id_criador = $_SESSION['id'];                        
                        $sql2 = "SELECT * FROM salas  where id_criador = $id_criador;";
                        echo ($sql2);  
                         mysqli_fetch_array($salas);
                         var_dump($salas);               

							   
                         
