<?php

include('conectaBD.php');
session_start();
if (! $_SESSION['username'] or ! $_SESSION['id'])
{
    header('location:login.html');
}

$id_unico = $_GET['id_unico'];

$sql = "DELETE  FROM `salas` WHERE id_unico = '".$id_unico."'";
$sql2 = "DELETE  FROM `associacoes` WHERE id_unico = '".$id_unico."'";

if (mysqli_query($conn,$sql) and mysqli_query($conn,$sql2))
{

    header('location:index.php');
}
else{
    echo "algo correu mal";
    //header('location:index.php');
}


?>