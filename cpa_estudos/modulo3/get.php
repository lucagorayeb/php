<?php
// Superglobais no PHP
// São variaveis que estão definidas para gene no escopo global

// $_GET - Dados sõa passados pela URL
//         Limite de 2000 caracteres
//         Dados ficam expostos e são fácilmente manipuláveis.

// isset() - Verifica se a variavel foi setada
// empty() - Verifica se a variavel está vazia


//$nome = $_GET['nome'];
//$idade = $_GET['idade'];

//echo "Olá $nome você tem $idade anos";

/*
if(isset($_GET['campanha'])){

    $campanha = $_GET['campanha'];
    echo "Você veio pela campanha ".$campanha;

}else{
    echo "Variavel não definida";
}

echo "<br>";

if(!empty($_GET['campanha'])){

    $campanha = $_GET['campanha'];
    echo "Você veio pela campanha ".$campanha;

}else{
    echo "Variavel vazia";
}
 */

//echo $_GET['pessoa'];

if(!empty($_GET['Login']) && !empty($_GET['Password'])){
    $login = $_GET['Login'];
    $password = $_GET['Password'];
    echo "$login <br>";
    echo "$password <br> ";
}
?>
