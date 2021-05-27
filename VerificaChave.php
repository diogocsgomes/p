<?php
include('conectaBD.php');

if(isset($_POST['signup2'])){

    if($_POST['chave'] == sha1($_POST['email']))

    {
        $email = $_POST['email'];
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

    
    
    <h3 align="center">  Insira a sua nova password </h3>
        <form action="AtualizaPass.php" method="POST" align="center">
            <input type="text" id ="password" name="password" placeholder="Nova Password">
            <input type="hidden" id="email" name="email" value="<?php echo $email;?> ">
            <input type="submit" id="signup3" name="signup3">
        </form>
        <?php
        
    }


    else{
        header('location:RecuperaPass.html');
    }
}
        

?>