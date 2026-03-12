<?php

function saudacao(){
    return 'Olá mundo';
}

// Quando definimos um valor padrão a passagem 
// de valor para váriavel se torna opcional
function somaNumero($num1, $num2, $num3=0){
    return $num1 + $num2 + $num3;
}

// O php pode agir da mesma forma que o C age 
// definir o tipo da variável que vai ser passada
// para a função 

// O tipo de retorno da função no php é definido depois
// dos parenteses da função
function somaNumeros($num1, $num2, $num3=0) : int{
    return $num1 + $num2 + $num3;
}


// O php também possui funções com parâmetros nomeados
// O lado bom é que a ordem não altera o resultado
function parametrosNomeados(string $nome, string $sobrenome, int $idade) : string{
    return "Meu nome é $nome $sobrenome e eu tenho $idade";
}

echo parametrosNomeados(nome : 'Luca', sobrenome : 'Gorayeb', idade : 20);

// Como fazer a documentação com PHPDoc
// @param representa os parametros que são utilizados

/**
 * Retorma uma mensagem de boa noite.
 *
 * @return string mensagem de boa noite. 
 */
function daBoaNoite() : string{
    return "Boa Noite";
}

daBoaNoite();
?>
