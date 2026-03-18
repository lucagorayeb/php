<?php

class Conta{

    // Atributos 
    private int $saldo;
    private int $chequeEspecial;

    // Métodos

    public function __construct(int $saldo, bool $chequeEspecial = false){
        $this->saldo = $saldo;
        $this->chequeEspecial = $chequeEspecial;
    }

    public function sacar(int $valor){
        if($valor > $this->saldo){
            echo "O cheque especial não pode ter um débito de mais de 100 reais.\n"; 
            return false;        
        }
        $this->saldo -= $valor;
        echo 'Você sacou: '.$valor."\n";
    }

    public function depositar(int $valor){
        if($valor <= 100){
            echo "Você depositou: ".$valor."\n";
            $this->saldo += $valor; 
        }else{
            echo "Valor excedeu o permitido.\n";
        }
    }

}

$conta1 = new Conta(500);
$conta1->sacar(600);
?>
