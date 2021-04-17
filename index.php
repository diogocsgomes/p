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
<!-- header styleshets e metatags -->
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
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


<!-- Body: coodigo em php para a listagem das pastas -->
</div>
<div class="row" align ="center">
<div class="column">
<table>
<tbody>
<tr>
 <th scope="col">As minhas Salas</th> 






       <?php

       //Mostar as salas que o utilizador criou
       $sql3 = "SELECT * FROM salas WHERE id_criador = ".$_SESSION['id'];
       $result_set2 = mysqli_query($conn,$sql3); 
       
       while ($row = mysqli_fetch_array($result_set2)) {
           
           ?>
           <tr>

           <td> <a href="MostraSala.php?id_sala=<?= $row['id_sala']?>"> <?php //if ($_SESSION['id'] == $row['id_criador']){
                        echo $row['nome']; ?> </a> </br></td>
                        

                       <td> 
    <button class="button" id="button" > Partilhar Sala</button>
    </td>
    <div class="bg-model">
 
        <div class="model-content">
            <div class="form">
                <br><br><h3>Com quem pertende partilhar esta sala?</h1>
                <form action="email.php?id_sala=<?=$row['id_sala']?>" method="POST">
                <input type="hidden" value="<?php echo   $row['id_sala']?>" name="teste" >
                <br><input type="text" name="email" placeholder="Email">
                <br><br>  <button type="submit" class="button3" id="submit" name="submit">Compartilhar esta pasta</button>
            </div>
            </form>
            <div class="close">
                +
            </div>
        </div>
    </div>
    
</td>
    
</tr>
</tr>




  
                        <?php }?>

                        </tbody>
                        </table>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">

</script>


<script>
$(document).ready(function(){
  $(".button").click(function(){
    $(".bg-model").css("display", "flex");  
  });

  $(".close").click(function(){
    $(".bg-model").css("display", "none");  
  });
});

</script>



<div class="column" >
<table >
<tbody>
<tr>
 <th scope="col">Salas Subcsritas</th> 

 <?php
 //Listar as paginas em partilhadas com o utilizador
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





<style>
    
    .bg-model{
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.2);
        position: absolute;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
    }
    .model-content{
        width: 500px;
        height: 300px;
        background-color: white;
        border-radius: 4px;
        position: relative;
    }

    .close{
       position: absolute;
       top: 0; 
       right: 14px;
       font-size: 42px;
       transform: rotate(45deg);
       cursor: pointer;

    }
    .button3 {
  box-align:right;
  background-color: #4876cc; color: black; 
  border: solid transparent;
  border-radius: 10px;
  color: rgb(0, 0, 0);
  padding: 2px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
} 
</style>
                         
