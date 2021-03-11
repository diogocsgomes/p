<?php 

	$servidor = '127.0.0.1:3307';
	$username = 'root';
	$password = '';
    $basedeDados = 'pap_testes';

	$conn = mysqli_connect($servidor, $username, $password,$basedeDados) or die('erro na ligação à base de dados');

?>