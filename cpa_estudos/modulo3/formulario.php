<?php

//if($_SERVER['REQUEST_METHOD'] == 'POST') {
  //  echo "Foi enviado um formulário";
//}else{
  //  echo "Ainda não foi enviado nada";
//}

// ?? - Nulish operator se a variavel a esquerda tiver um valor
//      indefinido ou nulo aparece o valor que está a direita do 
//      operador.

$mensagem = null;

if(!empty($_POST['login']) && !empty($_POST['password'])){
    
    ///     ADMN / ADMIN

    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    if($login == 'ADMIN' && $password == 'ADMIN'){
        $mensagem = 'Login efetuado com sucesso';
    }else{
        $mensagem =  'Usuário ou senha inválidos';
    }
}else{
    $mensagem = 'Preencha todos os campos.';    
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
    <form action="" method="POST">
        <input type="text" name="login" placeholder="Digite o login" value="<?php $login ?? '' ?>" /> <br>
        <input type="text" name="password" placeholder="Digite a senha" value="<?php $password ?? '' ?>"/> <br>
        <input type="submit"value="Enviar" />
        <?php
            echo '<br>'.$mensagem;   
        ?>
    </form>
</body>
</html>
