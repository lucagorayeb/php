<?php
// Todas as funções retornam valores para exibir o valor de uma função 
// deve-se passar um echo antes.
    $primeiroNome = 'Luca';
    $ultimoNome = 'Gorayeb';
    echo "Hello fucking world! ".$primeiroNome.' '.$ultimoNome;

    $fraseNome = 'Seu nome é: Alessandro Kobs, ele tem 10 caracteres';
    
    // strlen() retorna o tamanho da string.
    $caracteresFrase = strlen($fraseNome);
    echo '<br>'.$caracteresFrase;

    // strpos() retorna a posição de início de uma frase.
    $posicaoPalavraNome = strpos($fraseNome, 'nome');
    echo '<br><br>'.$posicaoPalavraNome;

    // substr() retorna parte de uma string.
    // O primeiro número indica a posição que vai começar.
    // O segundo número indica quantos caracteres a partir 
    // da posição inicial serão buscados.
    $parteString = substr($fraseNome, 4, 5);
    echo '<br><br>'.$parteString;

    // Funçõoes de arredondamento 
    // round() - Arredonda para o número mais próximo 
    echo '<br><br>round(): '.round(2.90).'<br>';
    echo 'round(): '.round(2.40).'<br>';
    
    // floor() - Arredonda para o menor
    echo 'floor(): '.floor(2.90).'<br>';

    
    echo round(2.90).'<br>';
    





?>
