<?php

session_start();
include('conectaBD.php');
include('RegistarUtilizadores.php');

if(isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $salt = "string";
    $password_encriptada = sha1($password.$salt);


    $sql = "SELECT * FROM utilizadores WHERE username = '" . $username . "' AND password = '" . $password_encriptada . "';";
    $resultado = mysqli_query($conn, $sql);

    //var_dump($sql);

    if (mysqli_num_rows($resultado) >= 1) {
        $user = mysqli_fetch_assoc($resultado);
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $user["id"];
        //a linha abaixo funciona mas nao é necessária
        //$user_id =  $user["id"];
        

        //var_dump($user_id);
        //header('location: upload1.php');
        header('location: index.php');
    } else {
        //echo('erro');
        header('location:login.html');
    }

}


?>
