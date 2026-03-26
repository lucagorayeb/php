<?php
namespace luca\dinner;

abstract class Usuario{
    public function __construct(protected string $nome){
        $this->nome = $nome;
    }

    public function verCardapio(Cardapio $cardapio){
        return $cardapio->listarProdutos();
    }

    abstract function podeAdicionarProduto() : bool;
    abstract function podeRemoverProduto() : bool;

    public function adicionarProduto(Cardapio $cardapio){
        if($this->podeAdicionarProduto()){
            $cardapio -> adicionarProduto();
        }
    }

    public function removerProduto(Cardapio $cardapio){
        if($this->podeRemoverProduto()){
            $cardapio -> removerProduto();
        }
    }
}
?>
