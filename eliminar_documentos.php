<?php
include('conectaBD.php');
session_start();

	
if (! $_SESSION['username'] or ! $_SESSION['id'])
{
    header('location:login.html');
}

$id = $_GET['id_documento'];

  $sql = "DELETE FROM `documentos2` WHERE `id` = '".$id."'";
if (mysqli_query($conn,$sql)){
     
    header('location:MostraSala.php?id_unico='.$_GET['id_unico'].'');


}
else{
  echo  "algo correu mal";
}


//echo $_GET['id_documento'];



?>