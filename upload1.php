<?php
session_start();
include('conectaBD.php');
if (! $_SESSION['username'] or ! $_SESSION['id'])
{
    header('location:login.html');
}
$id_sala = random_int(1,10);
//(string)$id_pasta;
//$utilizadores_id = $_SESSION['id'];
//echo($utilizadores_id);
//$designacao = "teste";
//$nome_original = "teste2";



if(isset($_POST['upload'])) {
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_tem_Loc = $_FILES['file']['tmp_name'];
    $file_store = "upload/".$file_name;
    //$file_store = "utilizadores//'.$_SESSION['username'].'//'.$nome".$file_name;    
    $utilizadores_id = $_SESSION['id'];
    $designacao = $utilizadores_id.$file_name; 
    //$file_store = 'utilizadores\\'.$_SESSION['username'];
   // mkdir('utilizadores\\'.$_SESSION['username'].'\\'.$nome);

    
    //$designacao = $id_pasta +"_"+ $file_name;

    if (move_uploaded_file($file_tem_Loc,$file_store)){
        echo "os ficheiros foram enviados";
        $sql = "INSERT INTO documentos(utilizadores_id,id_sala,designacao,nome_original) VALUES('" . $utilizadores_id . "','" . $id_sala . "','" . $designacao . "','" . $file_name . "');";
        //echo ($sql);
        mysqli_query($conn ,$sql);    
    }
    else 
    {
        echo"o ficheiro nao ficou armazenado na base de dados";
    }
   
}

//$sql2 = "SELECT * FROM utilizadores WHERE username = '" . $username . "';"


?>
<!DOCTYPE html>
<html>
    <header>Upload de ficheiros</header>
    <title>Upload de ficheiros</title>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <p><input type="file" name="file" ></p>
            <p><input type="submit" name="upload" value="Upload file"></p>
        </form>

        <a href="logout.php">LogOut</a>
        <a href="index.php">PaginaInicial</a>

        <a href="upload/teste.txt" download="teste.txt">teste </a>
    </body>
</html>