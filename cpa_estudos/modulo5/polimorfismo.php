<?php
abstract class Animal{
    abstract public function emitirSom();

    public function mover(){
        echo 'Movendo';
    }
}

class Cachorro extends Animal{

    public $nome = 'Cachorro';

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function emitirSom(){
        return "Au Au\n";
    }
}

class Gato extends Animal{

    public $nome = 'Gato';
    public function emitirSom(){
        return "Miau\n";
    }
}

class Peixe extends Animal{
    public $nome = 'Peixe';

    public function emitirSom(){

    }
}

class FilaBrasileiro extends Cachorro{
    //public $nome = 'Fila Brasileiro';
    public $meses = 2;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function emitirSom(){
        if($this->meses > 6){
            return 'Ruf Ruf';
        }else{
            return parent::emitirSom();
        }
        
    }
}

/* $cachorro = new Cachorro();
$gato = new Gato();
$peixe = new Peixe();

function fazerAnimalEmitirSom($animal){
    return "O aniamil ".$animal->nome." faz: ".$animal->emitirSom();
}

$animais = [$gato, $cachorro, $peixe];

foreach($animais as $animal){
    echo fazerAnimalEmitirSom($animal); 
}*/

$fila = new FilaBrasileiro('Rufus');
echo "O ".$fila->nome." faz: ".$fila->emitirSom();
echo "\n";
?>
