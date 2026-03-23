<?php
class Carro {
    // Atributos

/*     public string $cor;
    public int $ano;
    public string $modelo; */

    // Métodos

    public function __construct(public string $cor, public int $ano, public string $modelo){
        $this->cor = $cor;
        $this->ano = $ano;
        $this->modelo = $modelo;
        echo "Construindo um ".$this->modelo."\n";
    }

    public function acelerar(){
        echo 'Acelerando';
    }


    public function freiar(){
        echo 'Freiando';
    }
}

// Objeto 1 - carro 1

$carro1 = new Carro('Azul', 2008, 'Gol');
//$carro1->cor = 'Azul';
//$carro1->ano = 2024;
//$carro1->modelo = 'ABCD';

/* // Objeto 2 - carro 2

$carro2 = new Carro;
$carro2->cor = 'Preto';
$carro2->ano = 2022;
$carro2->modelo = 'XYZ';

echo "carro 1: \n";
$carro1->acelerar();
echo "\n";
$carro1->freiar();
echo "\n";

echo "carro 2: \n";
$carro2->acelerar();
echo "\n";
$carro2->freiar();
echo "\n";
 */
?>
