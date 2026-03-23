con<?php

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
        if($valor > $this->saldo && $this->chequeEspecial == false){
            echo "Você não tem saldo suficiente.\n"; 
            return false;        
        }

        if($valor > $this->saldo + 100 && $this->chequeEspecial == true){
            echo "Você não pode sacar um valor maior do que o saldo + o cheque especial (100).\n"; 
            return false;
        }

        if($valor <= $this->saldo + 100 && $this->chequeEspecial == true){
            $this->saldo -= $valor;
            echo 'Você sacou: '.$valor."\n";
            return true;
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

    public function verSaldo(){
        echo $this->saldo;
    }

}

$conta1 = new Conta(500);
echo 'Saldo Inicial: '.$conta1->verSaldo()."\n";
$conta1->sacar(700);
$conta1->verSaldo();

echo "\n\n\n";

$conta2 = new Conta(500, true);
echo 'Saldo Inicial: '.$conta2->verSaldo()."\n";
$conta2->sacar(550);
$conta2->verSaldo();

echo "\n";
?>
