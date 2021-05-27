<?php
include('conectaBD.php');


if(isset($_POST['signup']))
{
    $para  = $_POST['email'];
   global $para;
 

$sql2="SELECT * FROM utilizadores WHERE email = '".$para."'";
        $validacao = mysqli_query($conn,$sql2);

if (mysqli_num_rows($validacao) > 0 ){
    


    $de = "emailPAP02@gmail.com";


    // $para = "emailPAP02@gmail.com";
    $de = "diogocsgomes@gmail.com";
    
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'From: Confirmar Email MyClass <emailPAP02@gmail.com>';
    //$headers = "From:".$de;
    $subject = "My subject";
    
    $example = "this is a example";
    
    $email_key = sha1($para);
    
    $txt = 
    "
    Este é o seu codigo para recuperar a sua password.$email_key
    "
    ;
    
    //$string = 123;
    //$txt =  "ola.$string";
    
    
    if (mail($para,$subject,$txt,implode("\r\n",$headers))){
        //echo "email enviado";
    }
    else{
        echo 'email não enviado';
    }
    //header('location:index.php');


}



else{
    echo "email não existe";
}





}

if(isset($_POST['signup'])){
?>


<!DOCTYPE html>
<html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<?php 
$email1 = $_POST['email'];
?>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


<header>
<div class="header"> 
  <title>   MyClass  </title>
<h1 class="titulo"> <a href="index.php" style="color: #ffffff; text-decoration: none;">  MyClass  </a></h1>





</div>
</header>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    
    
    <h3 align="center"> Foi enviado um codigo,para o seu email. <br> Insira o codigo na caixa abaixo </h3>
<form action="VerificaChave.php" align="center" method="POST">
<input type="text" id="chave" name="chave" placeholder="Insira a sua chave">
<input type="hidden" id="email" name="email" value ="<?php echo  $email1; ?>">
<input type="submit" id="signup2" name="signup2">

</form>



</html>
<?php

}
/*
if(isset($_POST['signup2'])){

    if ($_POST['cchave'] == sha1($para))
}



$sql3 = "SELECT * FROM `utilizadores` WHERE `email` = '".$para."'";
$dd = mysqli_query($conn,$sql3);

if ($row = mysqli_fetch_array($dd))
{
    echo $row['username'];
}
*/
