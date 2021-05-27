<?php
include('conectaBD.php');
session_start();

	
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
<h1 class="titulo"> <a href="index.php" style="color: #ffffff; text-decoration: none;">  MyClass  </a></h1>
<a href="#"><button class="button2"> Crie uma nova sala</button></a>
<a href="logout.php">
    <button class="button"> LogOut</button>
</a>
</div>
</header>





<div class="bg-model">
 
        <div class="model-content">
            <div class="form" align="center">

            <form action="trataSala.php" method="POST">
                      Nome da Sala <p>

</p>
            <input type="text" id="nome" name="nome" required>
            <p>
                     Codigo Da Sala
            </p> 
            <input type="text" id="codigo" name="codigo" required><p></p>
            <button type="submit" class="registerbtn" id="submit" name="submit">Registar</button>

        </form>
            
            <div class="close">
                +
            </div>
        </div>
    </div>









<!--
<div class="inserir">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>
-->

<!-- Body: coodigo em php para a listagem das pastas -->
</div>
<div class="row" align ="center">
<div class="column">
<table>
<tbody>
<tr>
 <th scope="col">As minhas Salas</th> 
 
 <!--<th>Partilhe</th>-->
</tr>





       <?php

       //Mostar as salas que o utilizador criou
          $sql3 = "SELECT * FROM salas WHERE id_criador = ".$_SESSION['id'];
              $result_set2 = mysqli_query($conn,$sql3); 
       
                 while ($row = mysqli_fetch_array($result_set2)) {
           
           ?>
    
     <tr>

          <td> <a href="MostraSala.php?id_unico=<?= $row['id_unico']?>"> <?php //if ($_SESSION['id'] == $row['id_criador']){
                        echo $row['nome']; ?> </a> </br></td>
                        
                        <td>          <a href="elemina_sala.php?id_unico=<?php echo $row['id_unico'];?>"> <button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
</svg>
                
              </button>
            </a>     
   <!-- <button class="button" id="button" data-id=<?//=$row['id_sala']?> > Partilhar Sala</button>-->
    
    </td>
             </tr>
  
                        <?php }?>
                        
                        
                        </tbody>
                        </table>
</div>
</div>
                        <?php 



 //Listar as paginas em partilhadas com o utilizador
       

 ?>

<?php

              //$sql5 = "SELECT * FROM salas WHERE id_criador = ".$_SESSION['id'];
       //$result_set4 = mysqli_query($conn,$sql5); 
       
      // while ($row = mysqli_fetch_array($result_set4)) {
           
        //isto nao esta a funcionar porque o loop está a recolher o id do ultimo registo na base de dados, tenho que arranjar uma forma de  recolher o id certo
           ?>


                        
       <!-- este model foi posto de parte-------------------------------------

    <div class="bg-model">
 
        <div class="model-content">
            <div class="form">
                <br><br><h3>Com quem pertende partilhar esta sala?</h1>
                <form id="modal" action="" method="POST">
                <input type="hidden" value="<?php// echo   $row['id_sala']?>" name="teste" >
                <br><input type="text" name="email" placeholder="Email">
                <br><br>  <button type="submit" class="button3" id="submit" name="submit">Enviar Email</button>
            </div>
            </form>
            <div class="close">
                +
            </div>
        </div>
    </div>
    -->
   
</tr>

                <?php//  }?>

                
                      


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">

</script>


<script>
//este javascript faz parte de um side-nav que enternato foi posto de parte----------------------------------------------
/*
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
*/
//---------------------------------------------------------------

//este javascript faz parte de um model que enternato foi posto de parte----------------------------------------------



$(document).ready(function(){
  $(".button4").click(function(){
    var id = $(this).data("id");
    $('#modal').attr('action','email.php?id_sala='+id);
    console.log(id);
    $(".bg-model").css("display", "flex");  
  });

  $(".close").click(function(){
    $(".bg-model").css("display", "none");  
  });
});
//--------------------------------------

$(document).ready(function(){
  $(".button2").click(function(){
   
    $(".bg-model").css("display", "flex");  
  });

  $(".close").click(function(){
    $(".bg-model").css("display", "none");  
  });
});




</script>



<?php
/*
$encryption = $_POST['sala'];
echo $encryption;

$decryption_iv = random_bytes($iv_length);
  

$decryption_key = openssl_digest(php_uname(), 'MD5', TRUE);
  

$decryption = openssl_decrypt ($encryption, $ciphering,
            $decryption_key, $options, $encryption_iv);
  */

?>

</form>


<table>
<tbody>
<tr>
 <th scope="col">Salas Subscritas  <p></p>
 <form action="trata_associacao.php" method="POST" align="left">
<input type="text" name="codigo" id="codigo" placeholder="Codigo de sala">
<input type="submit" id="submit" name="submit" value="Subscrever" > </th> 

 <?php
 //Listar as paginas em partilhadas com o utilizador
       $sql4 = "SELECT * FROM associacoes WHERE id_utilizador = ".$_SESSION['id'];
       $result_set3 = mysqli_query($conn,$sql4); 
       
       while ($row = mysqli_fetch_array($result_set3)) {
           
           ?>

<tr>

           <td> <a href="MostraSalaPartilhada.php?id_unico=<?= $row['id_unico']?>"> <?php //if ($_SESSION['id'] == $row['id_criador']){
                        echo $row['nome']; ?> </a> </br></td>


                       <!-- <td> <a href="">Partilhar esta pasta</td>-->
                        <?php }?>
<!--<tr>         
 <td>Para aqui irão as pastas subsctritas</td>
</tr>    
    -->        
</tr>


</tbody>
</table>



</html>





<style>
    
    body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}




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
                         
