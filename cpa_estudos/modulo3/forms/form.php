<?php
    // FILTER_SANATIZE -> Serve para limpar os caracteres de umastring 
    // FILTER_VALIDADE -> Verifica se atende aos requisitos

require 'functions.php';
$erro = null;
$sucesso = null;
$tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP'];
$tecnologias_validas = ['HTML', 'CSS'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $tecnologia = $_POST['tecnologia'];
    var_dump($tecnologia);


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
        <!-- <input type="text" name="texto" placeholder="Digite o texto" /> -->
        
        <?php foreach($tecnologias as $tecnologia) :?>
            <label>
                <?= $tecnologia ?> 
            </label>
            <input type="checkbox" name="tecnologia[]" value="<?= $tecnologia ?>">
            
            <hr>
        <?php  endforeach; ?>
        <input type="submit" value="Enviar">
    </form>
    

</body>
<!-- 
<select name="opcoes[]" multiple>
    <?php foreach($tecnologias as $tecnologia) : ?>
            <option value="<?= $tecnologia; ?>" > <?= $tecnologia; ?> </option>
    <?php endforeach; ?>
    <input type="submit" value="Enviar" />
</select> -->
</html>

<?php
/*

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