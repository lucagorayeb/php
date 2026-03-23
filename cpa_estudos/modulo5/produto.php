<?php
Class Produto{
    // Atributos 

    private string $nome;
    private float $preco;

    public function __construct(string $nome, float $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }

    // GETTER
    public function getPreco() : float {
        // GET = Leitura 
        if(is_float($this->preco)){
            return $this->preco;
        }else{
            return 0.00;
        }  
    }

    // SETTER
    public function setPreco(float $preco){
        // SET = ESCRITA
        $this->preco = $preco;
    }

    public function getNome() : string{
        if(strlen($this->nome) > 10){
            return "Nome muito longo";
        }else{
            return $this->nome;
        }
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }
}

$produto1 = new Produto("Cadeira de banho", 500.00);
echo $produto1->getNome()."\n";
?>
