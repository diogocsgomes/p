<?php
include('conectaBD.php');
session_start();

	
if (! $_SESSION['username'] or ! $_SESSION['id'])
{
    header('location:login.html');
}
?>
<!DOCTYPE html>
<html>
    
    <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


<header>
<div class="header"> 
  <title>   MyClass  </title>
<h1 class="titulo"> <a href="index.php" style="color: #ffffff; text-decoration: none;">  MyClass  </a></h1>
<a href="email.php?">
    <button class="button"> Partilhar Sala</button>


<a href="#">
    <button class="button2"> Inserir documentos </button>
<a href="logout.php">
    <button class="button"> LogOut</button>
</a>
</div>
</header>
<div class="inserir">
</div>






<body>
    <?php //echo $_GET['id_sala'];
    
    
    $sql = "SELECT  `codigo` FROM `salas` WHERE id_sala = ".$_GET['id_sala'] ;
    $result_set = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result_set);
    echo "Partilhe esta sala: ".$row['codigo'];
 
       
            
         
    
   
    ?>




    <div>

    
<table class="table">
<tbody>
<tr>
 <th scope="col">Nome</th> 



<?php 


$sql2 = "SELECT * FROM documentos WHERE id_sala = ".$_GET['id_sala'];
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
            echo $row['nome_original'];//} ?>" download > 
            
            <button type="button" class="btn btn-primary" >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"></path>
</svg>
                
              </button>
            
            
            </a>
            </br> <br> 
            

          <a href="eliminar_documentos.php?id_documento=<?php  echo $row['id']; ?>&id_sala=<?php echo $_GET['id_sala'];?>"> <button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
</svg>
                
              </button>
            </a>
            
            
            <td>
            <?php }
            
            ?>


           
            
       </tr>

       </tr>
</tbody>
</table>
</body>


<div class="bg-model">
 
    <div class="model-content">
        <div class="form" align="center">
<table>
<th>
            <form action="upload1.php?id_sala=<?= $_GET['id_sala']?>" method="POST" enctype="multipart/form-data">
                <p><input type="file" name="file" ></p>
                <p><input type="submit" name="upload" value="Enviar Ficheiro"></p>
    
                </th>
            </form>
            </table>
        

        
                <div class="close">
                    +
                </div>
        </div>
    </div>

</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">

</script>


<script>


$(document).ready(function(){
  $(".button2").click(function(){
   
    $(".bg-model").css("display", "flex");  
  });

  $(".close").click(function(){
    $(".bg-model").css("display", "none");  
  });
});
</script>


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
        height: 125px;
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
</style>