<?php


include('conectaBD.php');
session_start();

	//$sql = "SELECT * FROM salas";
   /* $sql = "SELECT * FROM utilizadores";

	$salas = mysqli_query($conn,$sql);*/
if (! $_SESSION['username'] or ! $_SESSION['id'])
{
    header('location:login.html');
}

$para = $_POST['email'];
$sql2="SELECT * FROM utilizadores WHERE email = '".$para."'";
        $validacao = mysqli_query($conn,$sql2);

if ($_POST['password'] == $_POST['password2'] and mysqli_num_rows($validacao) == 0){
/*

$id_sala = $_GET['id_sala'];
echo $id_sala;
*/

//$para = $_POST['email'];

//$teste = $_POST['teste'];
//echo $teste;

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
este é o seu codigo.$email_key
"
;

//$string = 123;
//$txt =  "ola.$string";


if (mail($para,$subject,$txt,implode("\r\n",$headers))){
    //echo "email enviado";
    ?>
    <html>
    
    <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


<header>
<div class="header"> 
  <title>   MyClass  </title>
<h1 class="titulo"> <a href="index.php" style="color: #ffffff; text-decoration: none;">  MyClass  </a></h1>





</div>
</header>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    
    
    <h3 align="center"> Foi enviado um codigo,para o seu email, para confirmar a sua conta. <br> Insira o codigo na caixa abaixo </h3>
<?php
}
else{
    //echo 'email não enviado';
}
//header('location:index.php');
?>


<!-- CSS only -->



<form action="RegistarUtilizadores.php" method="POST" align="center">
<input type="text" name="codigo" id="codigo" placeholder="codigo" required>
<input type="hidden" name="username" id="username" value="<?php echo $_POST['username'];?>">
<input type="hidden" name="email" id="email" value="<?php echo $para;?>">
<input type="hidden" name="password" id="password" value="<?php echo $_POST['password'];?>">
<input type="hidden" name="password2" id="password2" value="<?php echo $_POST['password2'];?>">
<input id="butao" type="submit" name="signup" id="signup" class="form-submit" value="Registar" />

</form>
</html>
<?php }
else{
    header('location:registar.html');
}

?>