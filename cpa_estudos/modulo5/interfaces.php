<?php

interface MetodoPagamento{
    public function pagar(float $valor) : bool;
}

class Paypal implements MetodoPagamento{
    public function pagar(float $valor) : bool{
        echo 'Pagamento via Paypal no valor de R$ '.$valor."\n";
        return true;
    }
}

class CreditCard implements MetodoPagamento{
    public function pagar(float $valor) : bool{
        echo 'Pagamento via cartão de crédito no valor de R$ '.$valor."\n";
        return true;
    }
}

class Pix implements MetodoPagamento{
    
    public function gerarQrCode(float $valor) : string{
        echo "Gerando o QR Code para pagamento via Pix no valor de R$ ".$valor;
        return 'QRCODE';
    }

    public function pagar(float $valor) : bool{
        $qrCode = $this->gerarQrCode($valor);
        echo 'Pagamento via pix no valor de R$ '.$valor."\n";
        echo 'QR Code: '.$qrCode;
        return true;
    }  
}

$pagamento = new Pix();
$pagamento->pagar(500);

// Sistema usadando interfaces


// Eu quero...

// 1. Criar uma instancia de pagamento.
// 2. O usuário escolhe o método de pagamento.
// 3. O sistema vai chamar o método Pagar daquele 
// método de pagamento.

?>
