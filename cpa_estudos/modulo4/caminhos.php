<?php

include ('includes/include1.php');

echo "O retorno do camainhos __DIR__ é o seguinte: ". __DIR__."\n";

echo "O retorno do camainhos __FILE__ é o seguinte: ".__FILE__."\n";

echo "O retorno do camainhos getcwd() é o seguinte: ".getcwd()."\n";


/*
$relativePath = "./dados/nome.txt";
$absolutePath = realpath($relativePath);

echo $absolutePath."\n";
echo $relativePath."\n";

echo __DIR__."\n";
echo __FILE__."\n";

 
$arquivo = fopen( $relativePath,"a");
fwrite($arquivo, "\n");
fwrite($arquivo, "Luca");
 */
?>
