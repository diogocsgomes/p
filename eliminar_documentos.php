<?php
include('conectaBD.php');
session_start();

	
if (! $_SESSION['username'] or ! $_SESSION['id'])
{
    header('location:login.html');
}

$id = $_GET['id_documento'];

  $sql = "DELETE FROM `documentos` WHERE `documentos`.`id` = '".$id."'";
if (mysqli_query($conn,$sql)){
     
    header('location:MostraSala.php?id_sala='.$_GET['id_sala'].'');


}
else{
  echo  "algo correu mal";
}


//echo $_GET['id_documento'];



?>