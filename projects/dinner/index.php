<?php
require_once 'vendor/autoload.php';

use luca\dinner\Produto;
use luca\dinner\Cardapio;
use luca\dinner\Pedido;

$produto1 = new Produto("Pão", 2.50);
$produto2 = new Produto("Leite", 3.50);

$cardapio = new Cardapio();
$cardapio->adicionarProduto($produto1);
$cardapio->adicionarProduto($produto2);
echo "<pre>";
print_r($cardapio->listarProdutos());
echo "<br>";
$cardapio->removerProduto($produto1);
echo "<pre>";
print_r($cardapio->listarProdutos());

$pedido = new Pedido();
print_r($pedido->listarPedido());
$pedido->adicionarPedido($produto1, 2);
print_r($pedido->listarPedido());
?>
