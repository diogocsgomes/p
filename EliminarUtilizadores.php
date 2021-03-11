<?php 
	include('conectaBD.php');

	$sql = "Delete From utilizadores where id=" . $_GET['idUtilizador']; 

	if (mysqli_query($conn,$sql)){
		header('location: listarUtilizadores.php');
	}
	else echo "erro";
?>

