<?php 


// Melhorar o código 

function criarBarraDeCarregamento() : array{
    for($i = 0; $i <= 10; $i++){
        $barraDeCarregamento[$i] = '*';
    }
    return $barraDeCarregamento;
}

function mostraBarraDeCarregamento($barraDeCarregamento){ 
    //$indice = 0;
    for($i = 0; $i < 10; $i++){
        echo $barraDeCarregamento[$i];
        //$indice = $i;
    }
    echo "\n";
    //$barraDeCarregamento = mudarBarraDeCarregamento($barraDeCarregamento, $indice);
    //$verificador = verificarBarraDeCarregamento($barraDeCarregamento);
    //if($verificador == false){
    //    return 0;
    //}else{
    //    usleep(500000);
    //    system('clear');
    //    mostraBarraDeCarregamento($barraDeCarregamento);
    //}
    
}

function mostrarCarregamento($barraDeCarregamento){
    for($i = 0; $i < 10; $i++){
        echo $barraDeCarregamento[$i];
        usleep(500000);
        system('clear');
    }
    echo "\n";
}

function mostraBarraDeCarregamento_refatorar($barraDeCarregamento){ 
    $indice = 0;
    for($i = 0; $i < 10; $i++){
        echo $barraDeCarregamento[$i];
        $indice = $i;
    }
    echo "\n";
    $barraDeCarregamento = mudarBarraDeCarregamento($barraDeCarregamento, $indice);
    $verificador = verificarBarraDeCarregamento($barraDeCarregamento);
    if($verificador == false){
        return 0;
    }else{
        usleep(500000);
        system('clear');
        mostraBarraDeCarregamento($barraDeCarregamento);
    }
    
}

function mudarBarraDeCarregamento($barraDeCarregamento, $indice){
    static $contador;
    $barraDeCarregamento[$indice - ($indice - $contador)] = '#';
    $contador++;
    return $barraDeCarregamento;
    
    
}   

function verificarBarraDeCarregamento($barraDeCarregamento){
    for($i = 0; $i <= 10; $i++){
        if($barraDeCarregamento[$i] == '*'){
            return true;
        }
    }
    return false;
}

$barraDeCarregamento = criarBarraDeCarregamento();
mostraBarraDeCarregamento($barraDeCarregamento);

/**
 * Função que mostra o array
 * Função que muda o array 
 */