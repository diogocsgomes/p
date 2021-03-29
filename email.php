<?php

/*$a =$_GET['id_sala'];
echo $a;*/

$para = "diogocsgomes@gmail.com";
$de = "emailPAP02@gmail.com";
/*$para = "emailPAP02@gmail.com";
$de = "diogocsgomes@gmail.com";
*/
$headers = "From:".$de;
$subject = "My subject";
$txt = "Hello world!";


mail($para,$subject,$txt,$headers);


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'emailPAP02@gmail.com';                     //SMTP username
    $mail->Password   = 'PAP12345';                               //SMTP password
    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;
    //$mail->Port       = 993;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('emailPAP02@gmail.com');
    $mail->addAddress('diogocsgomes02@gmail.com');     //Add a recipient
    /*$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');*/
    /*$mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

/*
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'Se estás a ler isto ´r porqu eo consegues ler html</b>';
    $mail->AltBody = 'Isto é para testar se consegues ler html';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

*/

?>