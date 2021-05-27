<?php

	include('conectaBD.php');
	
	if (isset($_POST['submit'])){
		$id = $_POST['id'];
		$username = $_POST['username'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		
		$sql = "UPDATE utilizadores SET  username='" . $username . "', email='" . $email . "' WHERE id=".$id;
		
		if (mysqli_query($conn,$sql)){ 
			echo "alterou com exito";
			header('location:ListarUtilizadores.php');

		}else{
			echo mysqli_error($conn);
		}
	}
	else{
		session_destroy();
		header('location:index.php');
	}
	
?>