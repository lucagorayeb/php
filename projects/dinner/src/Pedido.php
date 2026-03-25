<?php
namespace luca\dinner;

class Pedido{
    private float $totalPagar;
    private array $pedidos = [];
    private int $quantidadeItens;

    public function adicionarPedido(Produto $produto, $quantidadeItens = 1){
        $this->pedidos[$produto->getNome()] = [
            "Preço" => $produto->getPreco(), 
            "Quantidade" => $this->quantidadeItens = $quantidadeItens, 
            "Total a pagar " => $this->quantidadeItens * $produto->getPreco()
        ];
    }

    public function listarPedido() : array{
        return $this->pedidos;
    }

    public function removerPedido(Produto $produto, $quantidadeItens = 1){
        $valueItem;
        foreach($this->pedidos as $pedido){
            foreach($pedido as $key => $value){
                if($key == "Quantidade"){
                    $valueItem = $value - $quantidadeItens;
                }
            }
        }
        if($valueItem <= 0){
            return $this->pedidos[$produto->getNome()] = [
                "Preço" => $produto->getPreco(),
                "Quantidade" => "Item Removido",
                "Total a pagar " => 0.00
            ];
        }else{
            return $this->pedidos[$produto->getNome()] = [
                "Preço" => $produto->getPreco(),
                "Quantidade" => $this->quantidadeItens = $valueItem,
                "Total a pagar " => $this->totalPagar = $valueItem * $produto->getPreco()
            ];
        }
    }
}
?>
