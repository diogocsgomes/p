<?php 
include('conectaBD.php');
session_start();

	
if (! $_SESSION['username'] or ! $_SESSION['id'])
{
    header('location:login.html');
}


if (isset($_POST['submit']))
{

        $codigo = $_POST['codigo'];
        $sql = "SELECT  `id_sala`, `nome`,`id_unico` FROM `salas` WHERE codigo = '".$codigo."'" ;
        $result_set = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result_set);
        $id_sala = $row['id_sala'];
        $nome = $row['nome'];
        $id_unico = $row['id_unico'];
        $id_utilizador = $_SESSION['id'];
        $sql2 = "INSERT INTO `associacoes`(`id_sala`, `id_utilizador`,`nome`,`id_unico`) VALUES ('" . $id_sala . "','" . $id_utilizador . "','".$nome."','".$id_unico."')";
        
        if(mysqli_query($conn,$sql2))
        {
                //echo "dados inseridos com sucesso";
                header('location:index.php');
        }
        else{
                header('location:index.php');  
        }

}

  ?>