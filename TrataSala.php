<?php
include('conectaBD.php');
session_start();
if (! $_SESSION['username'] or ! $_SESSION['id'])
{
    header('location:login.html');
}


//diz me qual o diretiorio/pasta currente
//$pasta_currente = getcwd();


if(isset($_POST['submit'])){
    //nome da sala
    $nome = $_POST['nome'];
    $codigo =$_POST['codigo'];
    $id_criador = $_SESSION['id'];
    
    
    $sql = "INSERT INTO salas(id_criador,nome,codigo) VALUES('". $id_criador ."','". $nome ."', '" .$codigo. "' )";

    //mkdir('salas\\' . $nome. '');
    mkdir('utilizadores\\'.$_SESSION['username'].'\\'.$nome);
    //echo($sql);
    if(mysqli_query($conn,$sql)){
        header('location:index.php');
    }
}










       /* $sql = "INSERT INTO salas(nome) VALUES('" . $nome . "')";

        if (mysqli_query($conn,$sql)){ 
        header('location:index.php');
*/




?>