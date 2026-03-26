<?php
namespace luca\dinner;

class Cliente extends Usuario{
    private Pedido $pedido;

    public function __construct(){
        $this->pedido = new Pedido();
    }

    public function podeAdicionarProduto() : bool{
        return false;
    }

    public function podeRemoverProduto() : bool{
        return false;
    }

    public function fazerPedido(Produto $produto, $quantidadeItens){
        $this->pedido->adicionarPedido($produto, $quantidadeItens);
        echo "O produto ".$produto->getNome()." foi adicionado<br>";
    }

    public function removerPedido(Produto $produto, $quantidadeItens){
        $this->pedido->removerPedido();
        echo "O produto ".$produto->getNome()." foi removido<br>";
    }

    public function pagarPedido(){
        echo "O total a pagar pelo seu pedido é R$ ".$this->pedido->finalizarPedido();
    }


}
?>
