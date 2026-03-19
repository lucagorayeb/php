<?php

class Veiculo{
    public $marca;
    public $modelo;

    public function __construct(string $marca, string $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function mover(){
        echo "Andando...\n";
    }

    public function freiar(){
        echo "Freiando...\n";
    }

}

class Carro extends Veiculo{
    public $qntPortas;

    public function __construct(string $marca, string $modelo, int $qntPortas){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->qntPortas = $qntPortas;
    }

    public function abrirPortas(){
        echo 'Abrindo as '.$this->qntPortas." portas.\n";
    }
}


class Moto extends Veiculo{
public $tipoGuidon;

public function __construct(string $marca, string $modelo, string $tipoGuidon){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->tipoGuidon = $tipoGuidon;
    }

    public function empinar(){
        echo "Empinando...\n";
    }
}


echo "Carro:\n";
$carro1 = new Carro('Hyundai', 'HB20', 4);
$carro1->mover();
$carro1->abrirPortas();
$carro1->freiar();
$carro1->mover();

echo "\n";

echo "Moto:\n";
$moto1 = new Moto('Honda', 'CBR1000', 'Manual');
$moto1->mover();
$moto1->empinar();
$moto1->freiar();
$moto1->mover();


?>
