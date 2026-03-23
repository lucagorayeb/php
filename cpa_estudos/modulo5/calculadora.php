<?php
class Calculadora{

    // Definir uma constante para o PI
    public const PI = 3.14;

    // Métodos estáticos
    public static function areaCirculo(float $raio){
        // Area = PI * raio
        // PI = 3.14

        return self::PI * $raio * $raio;

        // This - Se refere a instancia da classe (Objeto);
        // Self - Se refere a classe em si (Calculadora)
    }
}

$area = Calculadora::areaCirculo(10);
echo $area."\n";

?>
