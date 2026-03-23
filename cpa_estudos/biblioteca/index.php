<?php

require_once 'vendor/autoload.php';

echo 'Sistema de Biblioteca Iniciado! <br>';

use luca\biblioteca\Livro;
use luca\biblioteca\Estante;
use luca\biblioteca\Aluno;

$livro1 = new Livro('Kobs','PHP 8 e OOP');
$livro2 = new Livro('Luca', 'É MANÉ');
$livro3 = new Livro('Nobody', 'Blábla');
$livro1->marcarComoDisponivel();

$estante = new Estante();

$estante ->adicionarLivro($livro1);
$estante ->adicionarLivro($livro2);

$aluno = new Aluno('Kobs');

$aluno->adicionarLivroEmprestado($livro1);
//$aluno->adicionarLivroEmprestado($livro2);
//$aluno->adicionarLivroEmprestado($livro3);

echo '<pre>';
var_dump($aluno->podePegarEmprestado());

?>
