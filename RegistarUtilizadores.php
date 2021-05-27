<?php
    include('conectaBD.php');


/*
    if (isset($_POST['signup'] )){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
      
        if ($password == $password2){
        $salt = "string";
        $password_encriptada = sha1($password.$salt);

        $sql = "INSERT INTO utilizadores(username,password,email) VALUES('" . $username . "','" . $password_encriptada . "','" . $email. "')";

        //mkdir('utilizadores\\' . $username. '');
       
        
        if (mysqli_query($conn,$sql)){ 
			header('location:login.html');
      

        }
    }
    else{
        header('location:registar.html');
    }
        }

        */
        

        

    if (isset($_POST['signup']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $email_key = sha1($email);
        if ($_POST['codigo'] == $email_key){
        $salt = "string";
        $password_encriptada = sha1($password.$salt);

        $sql = "INSERT INTO utilizadores(username,password,email) VALUES('" . $username . "','" . $password_encriptada . "','" . $email. "')";

        //mkdir('utilizadores\\' . $username. '');
       
        
        if (mysqli_query($conn,$sql)){ 
			header('location:login.html');
      

        }
    }
    else{
        header('location:registar.html');
    }
        }

        /*
$username = $_POST['username'];
$email = $_POST['email'];
//$password = $_POST['password'];
//$password2 = $_POST['password2'];
$salt = "string";
//echo $username,$email,$password,$password2
if ($_POST['password'] === $_POST['password2'])
{
    $password_encriptada = sha1($password.$salt);

    if (isset($_POST['submit']))
    {
        $sql = "INSERT INTO utilizadores(username,password,email) VALUES('" . $username . "','" . $password_encriptada . "','" . $email. "')";
    
        
        if(mysqli_query($conn,$sql))
        {
            header('location:login.html');
        }
    }

}
else
{
    header('location:registar.html');
}
*/
    
?>