<?php
session_start();

if(empty($_SESSION['usuario'])){
    header('Location: index.php');
    exit();
}

$cor = '#eee';
if(!empty($_COOKIE['tema'])){
    $tema = $_COOKIE['tema'];

    if($tema == 'claro'){
        $cor = '#fff';
    }else{
        $cor = '#333';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellcome Page</title>
</head>
<body style="background-color: <?= $cor ?>">
    <?php
        echo "Bem vindo ".$_SESSION['usuario'];
        echo "<br />";
        echo '<a href = "logout.php"> Logout </a>';
    ?>
</body>
</html>

