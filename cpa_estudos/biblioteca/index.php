<?php

require_once 'vendor/autoload.php';

echo 'Sistema de Biblioteca Iniciado! <br>';

use luca\biblioteca\Livro;

$livro = new Livro('Kobs','PHP 8 e OOP');
echo '<pre>';
var_dump($livro);
$livro->marcarComoDisponivel();
var_dump($livro);
echo '</pre>';
?>
