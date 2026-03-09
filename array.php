<?php

// Array
$nomes = array("Alessandro", "João");
$frutas = ['Pera','Uva','Laranja'];

echo $frutas[0];

echo '<br> <br>';

// Arrays Associativos
$carros = [
    "Alessandro" => 1,
    "Luca" => 2,
    "Joao" => 30
];

$informacoes = [
    'Alessandro' => [
        'carro' => 1,
        'idade' => 33,
        'altura' => 173
    ],
    'Luca' => [
        'carro' => 2,
        'idade' => 22,
        'altura' => 172 
    ],
    'Joao' => [
        'carro' => 30,
        'idade' => 67,
        'altura' => 180
    ]
];

echo $carros["Luca"];

echo '<br> <br>';

echo '<pre>';
var_dump($carros);
echo '</pre>';
    
echo '<br> <br>';

echo '<pre>';
var_dump($informacoes);
echo '</pre>';

echo '<pre>';
var_dump($informacoes['Luca']['idade']);
echo '</pre>';

// Interagindo com arrays
$frutas = ['Pera','Uva','Laranja'];

// array_push() - Adiciona valores a um array
echo "array_push():  Adiciona valores a um array";
array_push($frutas, 'Banana');

echo '<pre>';
var_dump($frutas);
echo '</pre>';

echo '<br> <br>';

// array_shift() - Retira o valor do início do array
echo 'array_shift() - Retira o valor do início do array';

array_shift($frutas);

echo '<pre>';
var_dump($frutas);
echo '</pre>';

echo '<br> <br>';

// array_pop(t) - Retira o valor do final do array
echo 'array_pop() - Retira o valor do final do array';

array_pop($frutas);

echo '<pre>';
var_dump($frutas);
echo '</pre>';

echo '<br> <br>';

// Adicionando indices no array
$frutas[2] = 'Morango';

// Modificando indices do array
$frutas[0] = 'Abacate';

echo '<pre>';
var_dump($frutas);
echo '</pre>';

echo '<br> <br>';

// cont() - Conta a quantidade de items em um array
$quantidadeDeItens = count($frutas);

?>
