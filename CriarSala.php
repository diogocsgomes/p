<?php
session_start();
include('conectaBD.php');
if (! $_SESSION['username'] or ! $_SESSION['id'])
{
    header('location:login.html');
}

?>





<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <table align="center">
        <form action="trataSala.php" method="POST">
        Nome da Sala <p>

</p>
            <input type="text" id="nome" name="nome" required>
            <p>
            Codigo Da Sala
            </p> 
            <input type="text" id="codigo" name="codigo" required><p></p>
            <button type="submit" class="registerbtn" id="submit" name="submit">Register</button>

        </form>

        </form>
    </table>
</html>