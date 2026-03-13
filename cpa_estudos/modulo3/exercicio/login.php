<?php
$mensagem = null;

setcookie('cookie_login','');

if(!empty($_POST['usuario']) && !empty($_POST['password'])){

    $login = htmlspecialchars($_POST['usuario']);
    $password = htmlspecialchars($_POST['password']);
    
    if($login == 'admin' && $password == 'admin'){
        $mensagem = "Usuário logado com sucesso!";
        header("Location: http://localhost:8080/wellcome.php");
        exit();
    
    }else{
    
        $mensagem = "Usuário ou senha, inválidos!";
    
    }

}else{

    $mensagem = "Preencha todos os campos";

}

?>
<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=UTF-8>
    <meta name=viewport content=width=device-width, initial-scale=1.0>
    <title>Login</title>
</head>
<body>
    <form method="post" action="login.php">
    <label for="username">Usuário:<?php ?></label>
        <input type="text" name="usuario"> <br>    
        <label for="username">Senha:</label>    
        <input type="password" name="password"> <br>    
        <label for="lembrar">Tema Preferido:</label> 
        <select name="tema">
            <option value="escuro">escuro</option>
            <option value="claro">claro</option>
        </select> <br>   
        <input type="submit">  
            <?php
                echo $mensagem;
            ?>
    </form>
</body>
</html>
