<?php

function processarPagamento(MetodoPagamento $formaDePagamento, float $valorPagamento){
    echo "Processando pagamento via ".$formaDePagamento->getName()." com valor de R$ ".$valorPagamento."\n";
    if($formaDePagamento->pagar($valorPagamento)){
        echo "Pagamento realizado com sucesso\n";
    }else{
        echo "Pagamento não realizado\n";
    }
}

?>
