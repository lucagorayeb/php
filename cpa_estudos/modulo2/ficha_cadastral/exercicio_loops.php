<?php
$cont = 0;
while($cont <= 10){
    $produto = 5 * $cont;
    echo "5 x $cont = $produto <br>";
    $cont++;
}

echo '<br><br>';

$soma = 0;
$iterador = 0;
while($iterador <= 20){
    $soma = $soma + $iterador;
    $iterador++;
}
        echo "$soma <br>";

echo '<br><br>';

for($contador = 1; $contador <= 10; $contador++){
    echo "$contador <br>";
}

echo '<br><br>';

for($i = 1; $i <= 10; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}
?>
