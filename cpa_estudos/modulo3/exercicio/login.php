<?php

session_start();
$mensagem = null;

if(!empty($_POST['usuario']) && !empty($_POST['password'])){

    $login = htmlspecialchars($_POST['usuario']);
    $password = htmlspecialchars($_POST['password']);

    if($login == 'admin' && $password == 'admin'){
        $_SESSION['usuario'] = $login;

            if($_POST['tema']){
                setcookie('tema', htmlspecialchars($_POST['tema']));
            }
            
        header('Location: wellcome.php');
    }else{
        echo "Usuário ou senha, inválidos!";
        echo '<a href="index.php"> Tentar novamente </a>';
    }

}else{

    echo "Preencha todos os campos.";
    echo '<a href="index.php"> Voltar</a>';

}

?>

