<?php
    // FILTER_SANATIZE -> Serve para limpar os caracteres de umastring 
    // FILTER_VALIDADE -> Verifica se atende aos requisitos

require 'functions.php';
$erro = null;
$sucesso = null;
$tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP'];
$tecnologias_validas = ['HTML', 'CSS'];
$formas_pagamento = ['Cartão','Boleto','Dinheiro'];
$formas_pagamento_user = ['Cartão','Boleto'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['honeypot'])){
        $erro = "Ops! Robô detectado.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1> Formulário </h1>
    <?php if(exibirErro($erro)) : ?>
        <p style="color:red">
            <?= $erro ?>
        </p>
    <?php endif; ?>
    <?php if(exibirErro($sucesso)) : ?>
        <p style="color:green">
            <?= $sucesso ?>
        </p>
    <?php endif; ?> 
        
    <form method="post">
        <input type="text" name="nome" placeholder="Digite o seu nome" /> <br>
        <input type="text" name="email" placeholder="Digite o seu email" /> <br>       
        <input type="text" name="mensagem" placeholder="Digite sua mensagem" /> <br>
        <input type="hidden" name="honeypot" value="" />
        <input type="submit" value="Enviar">
    </form>
    

</body>
<!-- 
<select name="tecnologia[]" multiple>
<?php foreach($tecnologias as $tecnologia) : ?>
    <option value="<?= $tecnologia; ?>" 
        <?php
            if(in_array($tecnologia, $tecnologiaSelecionada)){
                echo 'selected';
            }
        ?>
    > 
    <?= $tecnologia; ?> </option>
<?php endforeach; ?>
<input type="submit" value="Enviar" />
        </select> 

-->
</html>

<?php
/*
<?php foreach($formas_pagamento as $formaPagamento) : ?>
    <input type="radio" name="forma_pagamento" value="<?= $formaPagamento; ?>">
    <label> <?= $formaPagamento; ?></label>
    <br>
<?php endforeach; ?>
    
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    
    if(empty($_POST['forma_pagamento'])){
        $erro = "Selecione uma forma de pagamento.";
    } 
    $formaPagamento = $_POST['forma_pagamento'] ?? '';

    if(!in_array($formaPagamento, $formas_pagamento_user)){
        $erro = "Selecione um opção válida";
    }else{
        $sucesso = "Forma de pagamento aceita";
    }
    var_dump($formaPagamento);
    
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    
    if(empty($_POST['tecnologia'])){
        $erro = "Selecione pelo menos uma opção.";
    }else{
        $tecnologiaSelecionada = $_POST['tecnologia'] ?? '';
        if(count($tecnologiaSelecionada) != 1){
            $erro = 'Selecione apenas uma opção';
        }else if($tecnologiaSelecionada[0] != 'HTML'){
            $erro = "Selecione apenas o HTML";
            //var_dump($tecnologia);
        }else{
            $sucesso = 'HTML selecionado';
        }
    }
}

<?php foreach($tecnologias as $tecnologia) :?>
    <label>
        <?= $tecnologia ?> 
    </label>
    <input type="checkbox" 
        <?php
            if(in_array($tecnologia, $tecnologiaSelecionada)){
                echo 'checked';
            }
        ?>
    name="tecnologia[]" value="<?= $tecnologia ?>">
    
    <hr>
<?php  endforeach; ?>

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $opcoes = $_POST['opcoes'];
    var_dump($opcoes);
    
    if(count($opcoes) != 2){
        $erro = 'Selecione duas tecnologias válidas. EXATAMENTE!';
    }
    
    foreach($opcoes as $opcao){
        if(!in_array($opcao, $tecnologias_validas)){
            $erro = 'A tecnologia '.$opcao.' é uma opção inválida.';
            break;
        } 
    }

    if(empty($erro)){
        $sucesso = 'Deu tudo certo';
    }
}

// Parameter Tempering - Alteração/Modificação de parametro
// A verificação abaixo inpede que isso aconteça

if(!in_array($opcao, $tecnologias)){
    $erro = 'Opção Inválida';
}

// Como trazer valores do banco de dados e da api

$tecnologias_banco = [
    ['codigo' => 'html', 'nome' => 'HTML'],
    ['codigo' => 'bootstrap', 'nome' => 'Bootstrap'],
    ['codigo' => 'css', 'nome' => 'CSS'],
    ['codigo' => 'javascript', 'nome' => 'JavaScript'],
    ['codigo' => 'rn', 'nome' => 'React Native'],
    ['codigo' => 'php', 'nome' => 'PHP']
];

$tecnologias_api = [
    'html' => 'HTML',
    'css' => 'CSS',
    'javascript' => 'JavaScript',
    'php' => 'PHP',
    'bootstrap' => 'Bootstrap',
];


<?php foreach($tecnologias_api as $codigo => $tecnologia) : ?>
    <option value=" <?= $codigo ?> "> <?= $tecnologia ?> </option>
<?php endforeach;?>


<?php foreach($tecnologias_banco as $tec) : ?>
        <option value=" <?= $tec['codigo']?> "> 
            <?= $tec['nome']?>
        </option>
<?php endforeach;?>


// Sanitização  
$texto = htmlspecialchars($texto);

// Remover espaços antes e depois da palavra
$texto = trim($texto);        

//  Primeira Validação - Se o campo está preenchido
if (empty($texto)){
    $erro = "O campo texto é obrigatório";
}else if(strlen($texto) < 5){
    $erro = 'O texto deve ter pelo menos 5 caracteres';
}else if(strlen($texto) > 10){
    $erro = 'O texto tem que ter no máximo 10 caracteres';
}


*/ 
?>