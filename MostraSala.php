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
<title>MyClass</title>
<h1 class="titulo">MyClass</h1>
<a href="email.php?">
    <button class="button"> Partilhar Sala</button>
<a href="upload1.php?id_sala=<?= $_GET['id_sala']?>">
    <button class="button2"> Inserir documentos </button>
<a href="logout.php">
    <button class="button"> LogOut</button>
</a>
</div>
</header>
<div class="inserir">
</div>

<body>
    <?php echo $_GET['id_sala'];?>




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
            echo $row['nome_original'];//} ?>" download > download</a></br><td>
            <?php } ?>


           
            
       </tr>

       </tr>
</tbody>
</table>
</body>


