<?php
    require 'constantes_ficha_cadastral.php';
    require 'data.php';

    // Se está ou não empregado 
    $empregado = $esta_empregado == true ? 'Empregado' : 'Desempregado';

    //if($esta_empregado){
    //    $empregado = 'Empregado';
    //}else{
    //    $empregado = 'Desempregado';
    //}

    // Tempo para aposentar
    $idadeParaAposentar = $sexo == 'M' ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;
    //if($sexo == 'M'){
    //    $idadeParaAposentar = IDADE_APOSENTADORIA_MASCULINA;
    //}else{
    //    $idadeParaAposentar = IDADE_APOSENTADORIA_FEMININA;
    //}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorando váriaveis em PHP</title>
</head>
<body>
    
        <div class="container"> 
            <div class="card"> 
                <h1> Ficha Cadastral </h1>
                <p>Nome: <strong> <?= $nome; ?> </strong> </p>
                <p>Idade:<strong> <?= $idade; ?> </strong> </p>
                <p>Sexo: <strong> <?= $sexo; ?> </strong> </p>
                <p>Salário Mensal: <strong> R$ <?= number_format($salario_mensal, 2, ',', '.'); ?> </strong> </p>
                <p>Salário Anual: <strong> R$ <?= number_format($salario_mensal * 12, 2, ',', '.'); ?> </strong> </p>
                <p>Status de Emprego: <strong> <?= $empregado;?> </strong> </p>
                <p>Anos para a aposentadoria: <strong> <?= $idadeParaAposentar - $idade ?> </strong> </p>
                <p>Habilidades: <strong> <?php
                    echo implode(", ", $habilidades);
                ?> </strong> </p>
            </div>
        </div>

</body>
</html>
