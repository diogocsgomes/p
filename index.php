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
    <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!--
<table align="center">
<a href="logout.php">LogOut</a><p>
    <a href="CriarSala.php">Crie uma nova sala</a><p></p>
    <a href="upload1.php">Inserir ficheiros</a><p>
    <a href="index.php?id=100&id_salas=200">lalal</a> 
</table>-->

<header>
<div class="header"> 
<title>MyClass</title>
<h1 class="titulo">MyClass</h1>
<a href="CriarSala.php">Crie uma nova sala</a>
<a href="logout.php">
    <button class="button"> LogOut</button>
</a>
</div>
</header>
<div class="inserir">
<!--<a href="upload1.php">Inserir ficheiros</a>-->

</div>

<?php

/*echo $_GET['id'];
echo $_GET['id_salas'];
*/  
?>
<!--
<table>
<th scope="col">AS Minhas salas</th>
<th scope="col">|Codigo</th>
<th scope="col">|Ver sala</th>



</table>
     --->                             

<div>
<table class="table">
<tbody>
<tr>
 <th scope="col">Nome</th> 



<?php 
$sql2 = "SELECT * FROM documentos WHERE utilizadores_id = ".$_SESSION['id'];
$result_set = mysqli_query($conn,$sql2);
while($row = mysqli_fetch_array($result_set)  )
{
 ?>
       <tr>
       <td><?php //if ($_SESSION['id'] == $row['utilizadores_id']){
                        echo $row['nome_original'];//} ?></td>
       
      <!-- <td><?php //if ($_SESSION['id'] == $row['utilizadores_id']){
            //echo $row['designacao'];} ?></td>-->
       
       <td><?php //if ($_SESSION['id'] == $row['utilizadores_id']){
            echo $row['data_upload'];//} ?></td>
       
       <td> 
       <a href="upload/<?php //if ($_SESSION['id'] == $row['utilizadores_id']){
            echo $row['nome_original'];//} ?>" download > download</a></br><td>
            <?php } ?>
            
       </tr>
      
      
      
      
      
       <?php
       $sql3 = "SELECT * FROM salas WHERE id_criador = ".$_SESSION['id'];
       $result_set2 = mysqli_query($conn,$sql3); 
       while ($row = mysqli_fetch_array($salas)) {
           ?>
           
       <td> <a href="MostraSala.php?id_sala=<?= $row['id_sala']?>"> <?php //if ($_SESSION['id'] == $row['id_criador']){
                        echo $row['nome']; ?> </a> </br></td>
                        <?php }?>
       
      
            <?php   
       





/*$dir = 'utilizadores\\'.$_SESSION['username'];
$a = scandir($dir);
print_r($a);
*/


/*
                        
                        $id_criador = $_SESSION['id'];                        
                        $sql2 = "SELECT * FROM salas  where id_criador = $id_criador;";
                        echo ($sql2);  
                         mysqli_fetch_array($salas);
                         var_dump($salas);               
*/
?>	


</tr>
</tbody>
</table>

</div>
</html>
                         
