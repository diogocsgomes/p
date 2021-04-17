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



$id_sala = $_GET['id_sala'];
echo $id_sala;














?>