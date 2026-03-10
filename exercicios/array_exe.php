<?php
// Primeira atividade de array 
$cidades = ['Tokyo', 'Nova York', 'Buenos Aires', 'Florianopolis', 'Rio de Janeiro'];
echo $cidades[2];
echo '<br><br>';


// Segunda atividade de array
$alunos = [
    'Luca' => [
       'idade' => 20 
    ], 
    'Larissa' => [
       'idade' => 21
    ],
    'Luana' => [
       'idade' => 28
    ]
];
echo $alunos['Larissa']['idade'];
echo '<br><br>';

// Terceira atvidade de array
$cores = ['Azul', 'Rosa', 'Roxo'];
// $cores[] = 'Preto' - Caso seja adicionado no
// final do array também dá para fazer assim.
array_push($cores, 'Preto');
array_shift($cores);

echo '<pre>';
print_r($cores);
echo '</pre>';

// Quarta atividade de array
$precos = [
    'Arroz' => 5,
    'Carne' => 10,
    'Batata' => 2
];

$precos['Carne'] = 10 + $precos['Carne'];
$precos['Arroz'] = $precos['Arroz'] - 1;
echo '<pre>';
print_r($precos);
echo '</pre>';
?>
