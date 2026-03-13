<?php
// Calculo do Salário Anual

function calculaSalarioAnual(float $salarioMensal) : float{
    $tercoSalarial = $salarioMensal / 3;
    $salarioAnual = $salarioMensal * 13 + $tercoSalarial;
    return $salarioAnual;
}

function converteNumberToBRL(float $number) : string{
    return number_format($number, 2, ',', '.');
}

function calculaTempoParaAposentadoria(int $idade, string $sexo){
    $idadeParaAposentar = $sexo == 'M' ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;
    return $idadeParaAposentar - $idade;
}
?>
