<?php
// Include e Require
// O include inclui o arquivo se ele existir
// Caso não exista dá um erro e um aviso, mas o codigo continua rodando.
include 'nome.php';

// O require causa um erro fatal se o arquivo não existir 
require 'nome.php';
?>
<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=UTF-8>
    <meta name=viewport content=width=device-width, initial-scale=1.0>
    <title>Inclusões de arquivos</title>
</head>
<body>
<h1>Hello World, Eu sou <?= $nome ?></h1>
    <div></div>
</body>
</html>
