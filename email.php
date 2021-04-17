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


$id_sala = $_GET['id_sala'];
echo $id_sala;


$para = $_POST['email'];
$teste = $_POST['teste'];
echo $teste;
//$para = "diogocsgomes@gmail.com";
$de = "emailPAP02@gmail.com";


// $para = "emailPAP02@gmail.com";
$de = "diogocsgomes@gmail.com";

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$headers[] = 'From: Birthday Reminder <emailPAP02@gmail.com>';
//$headers = "From:".$de;
$subject = "My subject";

$example = "this is a example";
$txt = 
'
<html>
    Olá clike neste botão para poder aceder à pasta partolhada consigo.

    <a href="http://localhost/PAP/associacoes.php?id_sala=.$id_sala."><button> botao</button></a>
</html>
'

;


mail($para,$subject,$txt,implode("\r\n",$headers));


//header('location:index.php');


?>