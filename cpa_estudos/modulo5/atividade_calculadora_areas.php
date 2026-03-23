<?php
abstract class Forma{
    public abstract function calcularArea();
}

class Quadrado extends Forma{
    public $lado;

    public function __construct($lado){
        $this->lado = $lado;
    }

    public function calcularArea(){
        return $this->lado * $this->lado;
    }
}

class Retangulo extends Forma{

    public $base;
    public $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        if($this->base == $this->altura){
            return "Você quer calcular área de um quadrado e não um retângulo.";
        }    
        return $this->base * $this->altura;
    }
}

class Triangulo extends Forma{
    public $base;
    public $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        return ($this->base * $this->altura)/2;
    }
}

$quadrado = new Quadrado(5, 5);
echo $quadrado->calcularArea()." m2";
echo "\n";

$retangulo = new Retangulo(5, 8);
echo $retangulo->calcularArea()." m2";
echo "\n";

$triangulo = new Triangulo(3,5);
echo $triangulo->calcularArea()." m2";
echo "\n"; 




/* abstract class Forma{
    public abstract function calcularArea(int $base, int $altura);
}

class Quadrado extends Forma{
    public function calcularArea(int $base, int $altura){
        if($base != $altura){
            return "Você quer calcular área de um retângulo e não um quadrado.";
        }
        return $base * $altura;
    }
}

class Retangulo extends Forma{
    public function calcularArea(int $base, int $altura){
        if($base == $altura){
            return "Você quer calcular área de um quadrado e não um retângulo.";
        }    
        return $base * $altura;
    }
}

class Triangulo extends Forma{
    public function calcularArea(int $base, int $altura){
        return ($base * $altura)/2;
    }
}

$quadrado = new Quadrado();
echo $quadrado->calcularArea(5, 5)." m2";
echo "\n";

$retangulo = new Retangulo();
echo $retangulo->calcularArea(5, 8)." m2";
echo "\n";

$triangulo = new Triangulo();
echo $triangulo->calcularArea(3, 5)." m2";
echo "\n"; */
?>
