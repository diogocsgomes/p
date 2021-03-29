<?php
include('conectaBD.php');
session_start();

	//$sql = "SELECT * FROM salas";
   /* $sql = "SELECT * FROM utilizadores";

	$salas = mysqli_query($conn,$sql);*/
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
<a href="CriarSala.php"><button class="button2"> Crie uma nova sala</button></a>
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

<div class="row" align ="center">
<div class="column">
<table>
<tbody>
<tr>
 <th scope="col">As minhas Salas</th> 




      
      
      
       <?php
       $sql3 = "SELECT * FROM salas WHERE id_criador = ".$_SESSION['id'];
       $result_set2 = mysqli_query($conn,$sql3); 
       
       while ($row = mysqli_fetch_array($result_set2)) {
           
           ?>
           <tr>

           <td> <a href="MostraSala.php?id_sala=<?= $row['id_sala']?>"> <?php //if ($_SESSION['id'] == $row['id_criador']){
                        echo $row['nome']; ?> </a> </br></td>
                        

                       <td> <a href="email.php?id_sala=<?= $row['id_sala']?>">
    <button class="button"> Partilhar Sala</button></a>
    </td>

                        <?php }?>
</tr>
</tr>

</tbody>
</table>



<div class="column" >
<table >
<tbody>
<tr>
 <th scope="col">Salas Subcsritas</th> 

 <?php
       $sql4 = "SELECT * FROM associacoes WHERE id_utilizador = ".$_SESSION['id'];
       $result_set3 = mysqli_query($conn,$sql4); 
       
       while ($row = mysqli_fetch_array($result_set3)) {
           
           ?>



<tr>

           <td> <a href="MostraSala.php?id_sala=<?= $row['id_sala']?>"> <?php //if ($_SESSION['id'] == $row['id_criador']){
                        echo $row['id_sala']; ?> </a> </br></td>
                        

                       <!-- <td> <a href="">Partilhar esta pasta</td>-->
                        <?php }?>
<!--<tr>         
 <td>Para aqui irão as pastas subsctritas</td>
</tr>    
    -->        
</tr>


</tbody>
</table>


</div>
</div>
</html>
                         
