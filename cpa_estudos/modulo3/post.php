<?php

// $_POS - Dados são passados pelo corpo da requisição http
//         Não há limite de tamanho
//         Os dados não são tão fácilmente modificados pelo usuário

// htmlspecialchars - Uma função que identifica caracteres especiais 
//                    e então substitui por outros caracteres visualmente 
//                    iguais, mas que inofensivos. Impedindo assim assim um 
//                    ataque XSS.

if(!empty($_POST['Login']) && !empty($_POST['Password'])){
    $login = htmlspecialchars($_POST['Login']);
    $password = htmlspecialchars($_POST['Password']);
    echo "$login <br>";
    echo "$password <br> ";
}
?>
