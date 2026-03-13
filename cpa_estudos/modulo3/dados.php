<?php
if(!empty($_POST['Login']) && !empty($_POST['Password'])){
    $login = htmlspecialchars($_POST['Login']);
    $password = htmlspecialchars($_POST['Password']);
    $mensagem = null;
    if($login == 'admin' && $password == 'admin'){
        $mensagem =  "Você logou com sucesso";
    }else{
        $mensagem =  "Usuário ou senha inválidos";
    }
}
?>

<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=UTF-8>
    <meta name=viewport content=width=device-width, initial-scale=1.0>
    <title>Document</title>
</head>
<body>
    <form action="dados.php" method="POST">
        <input type="text" name="Login" placeholder="Digite o login" /> <br>
        <input type="text" name="Password" placeholder="Digite a senha" /> <br>
        <input type="submit"value="Enviar" />
        <?php
            echo $mensagem;   
        ?>
    </form>
</body>
</html>
