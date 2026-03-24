<?php
namespace luca\dinner;

class Pedido{
    private float $totalPagar;
    private array $pedidos = [];
    private int $quantidadeItens;

    public function adicionarPedido(Produto $produto, $quantidadeItens = 1){
        $this->pedidos = [
            "Item" => $produto->getNome(), 
            "Preço" => $produto->getPreco(), 
            "Quantidade" => $this->quantidadeItens = $quantidadeItens, 
            "Total a pagar " => $this->quantidadeItens * $produto->getPreco()
        ];
    }

    public function listarPedido() : array{
        return $this->pedidos;
    }
}
?>
