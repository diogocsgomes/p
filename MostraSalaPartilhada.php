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




<a href="logout.php">
    <button class="button"> LogOut</button>
</a>
</div>
</header>
<div class="inserir">
</div>


   
<table class="table">
<tbody>
<tr>
 <th scope="col">Nome</th> 



<?php 


$sql2 = "SELECT * FROM documentos2 WHERE id_unico = '".$_GET['id_unico']."'";
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
       </td>
       </table>




<?php } ?>
