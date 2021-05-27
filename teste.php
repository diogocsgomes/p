<?php

include('conectaBD.php');
session_start();

	
if (! $_SESSION['username'] or ! $_SESSION['id'])
{
    header('location:login.html');
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<?php

//$sql="SELECT email FROM utilizadores WHERE EXISTS (SELECT email FROM utilizadores WHERE email = 'diogocsgomes@gmail.com')";

$sql="SELECT * FROM utilizadores where email = 'diogocsgomes@gmccail.com' ";

$la = mysqli_query($conn,$sql);
//mysqli_query($conn,$sql);








if (mysqli_num_rows($la) == 0)

{

    echo "este campo nao existe pode fazer registo";

}
else{
    echo "este campo existe  nao pode fazer registo";
}


echo date("Y-m-d H:i:s");




$sql3 = "SELECT * FROM salas WHERE id_criador = ".$_SESSION['id'];
              $result_set2 = mysqli_query($conn,$sql3); 




              $sql4 = "SELECT * FROM associacoes WHERE id_utilizador = ".$_SESSION['id'];
       $result_set3 = mysqli_query($conn,$sql4); 

?>
<html>
<table>
<tr>
<th>salas criadas</th>
<th>salas subscritas</th>
</tr>
<tr>

<?php


while ($row = mysqli_fetch_array($result_set2)) {
    # code...
    ?>
    <td> <a href="MostraSala.php?id_unico=<?= $row['id_unico']?>"> <?php //if ($_SESSION['id'] == $row['id_criador']){
        echo $row['nome']; ?> </a> </br></td>
        
        <td>          <a href="elemina_sala.php?id_sala=<?php echo $row['id_sala'];?>"> <button type="button" class="btn btn-primary">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
</svg>

</button>
</a>     
</td>
<?php
}

?>




<?php
while ($row = mysqli_fetch_array($result_set3)) {
    
           ?>
<tr>


           <td> <a href="MostraSalaPartilhada.php?id_unico=<?= $row['id_unico']?>"> <?php //if ($_SESSION['id'] == $row['id_criador']){
                        echo $row['nome']; ?> </a> </br></td>


                       <!-- <td> <a href="">Partilhar esta pasta</td>-->
                       </td>
                        <?php }?>








</table>

</html>