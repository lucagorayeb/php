<?php
class Animal{

    //  Metodos
    public function respirar(){
        echo "Respirando...\n";
    }

    public function mover(){
        echo "Movendo...\n";
    }
}

class Mamifero extends Animal{

    // Metodos

    public function amamentar(){
        echo "Amamentando...\n";
    }

    public function abanarRabo(){
        echo "Abanando o Rabo...\n";
    }
}

class Ave extends Animal{

    // Metodos

    public function botarOvo(){
        echo "Colocando Ovo...\n";
    }

    public function voar(){
        echo "Voando...\n";
    }
}

class Cachorro extends Mamifero{

    // Metodos
    public function latir(){
        echo "AU...AU...\n";
    }

}

class Gato extends Mamifero{
    
    // Metodos
    public function miar(){
        echo "MIAU...MIAU...\n";
    }
}

class Pombo extends Ave{
    
    // Metodos
    public function arrulhar(){
        echo "CRU...CRU...\n";
    }
}

echo "Cachorro:\n";
$cachorro = new Cachorro();
$cachorro->respirar();
$cachorro->mover();
$cachorro->amamentar();
$cachorro->abanarRabo();
$cachorro->latir();

echo "\n\n";

echo "Gato:\n";
$gato = new Gato();
$gato->respirar();
$gato->mover();
$gato->amamentar();
$gato->abanarRabo();
$gato->miar();

echo "\n\n";

echo "Pombo:\n";
$pombo = new Pombo();
$pombo->respirar();
$pombo->mover();
$pombo->botarOvo();
$pombo->voar();
$pombo->arrulhar();

?>
