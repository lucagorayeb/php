<?php

setcookie('wellcome_cookie', 'Wellcome to this web page');

//include 'logout.php';

?>

<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=UTF-8>
    <meta name=viewport content=width=device-width, initial-scale=1.0>
    <title>Wellcome Page</title>
</head>
<body>
    <p> Bem vindo a páginas para quem logou</p> <br> <br>
    <form>
        <input type="submit" name"logout">
        </input>
            <?php 
 //               delCookies();
                header("Location: http://localhost:8080/login.php");
                exit();
            ?>
    </form>
</body>
</html>
