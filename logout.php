<?php
include('conectaBD.php');
if (! $_SESSION['username'])
{
    header('location:login.html');
}

session_destroy();
header('location:login.html');

?>