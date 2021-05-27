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
    $id_criador = $_SESSION['id'];


    //$codigo = sha1($nome.$id_criador);
    $salt="string";
    $codigo = $_POST['codigo'];
    $codigo2 = sha1($codigo.$salt);
    $data = date("Y-m-d H:i:s");
    $id_unico = sha1($nome.$id_criador.$data);
    
    
    $sql = "INSERT INTO salas(id_criador,nome,codigo,id_unico) VALUES('". $id_criador ."','". $nome ."', '" .$codigo2. "','".$id_unico."' )";
    var_dump($sql);

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