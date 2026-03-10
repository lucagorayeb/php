<?php
// Estruturas Condicionais no php
$vascoGanharQuinta = false;

if($vascoGanharQuinta == true){
    echo "Eu ficarei muito, muito feliz!";
}else{
    echo "Eu ficarei muito, muito puto!";
}

echo '<br><br>'

$idade = 20;

if($idade >= 18){
    echo "Você pode ingerir bebida alcoolica";
}else{
    echo "Você não pode ingerir bebida alcoolica. SEU BBZÃO";
}

echo '<br><br>'

$temCarteira = true;

if($idade >= 18 && $temCarteira == true){
    echo "Você pode dirigir no Brasil";
}else{
    echo "Você não pode dirigir no Brasil";
}

echo '<br><br>'
    
// Condicional usando o inversor lógico 
if(!$temCarteira){
    echo "Você não pode dirigir no Brasil";
}else{
    echo "Você pode dirigir no Brasil";
}
?>
