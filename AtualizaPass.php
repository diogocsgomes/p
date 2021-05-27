<?php
include('conectaBD.php');


if(isset($_POST['signup3']))
{
        $email = $_POST['email'];
        //echo $email;
        $pass = $_POST['password'];
        $salt = "string";
        $password = sha1($pass.$salt);
        
       // UPDATE `utilizadores` SET `password` = '3c04572d6c8ed15ffbef013a581bc30c767fb957' WHERE `email` = 'a28355@aemtg.pt'
        
        $sql = "UPDATE utilizadores SET `password` = '".$password."' WHERE email ='".$email."'";
        
        if (mysqli_query($conn,$sql))
        {
            //echo "ddd".$email;
           header('location:login.html');
        }
        else{
            header('location:RecuperaPass.html');
            //echo "nope";
        }
    }

?>