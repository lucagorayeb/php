<?php

// filesystem
// f(algumacoisa) - file (arquivo)
// read (ler) - r
// write (escrever) - w
// resource = recurso
// eof = end of file (fim do arquivo);
// fwrite - write (escrever)
// truncar - truncate (truncar)
// append - append (acrescentar)

$arquivo = fopen("nome.txt", "r");
$bytes = filesize("nome.txt");

// Ler o conteúdo do arquivo
while(!feof($arquivo)){
    $nome = fgets($arquivo);
    echo $nome.'<br>';
}
fclose($arquivo);

/*
$nomes = fread($arquivo, $bytes);
echo $nomes;

if($arquivo){
    echo "Arquivo aberto com sucesso";
    fclose($arquivo);
}else{
    echo "Arquivo não encontrado ou não pode ser aberto";
}

// Ler o conteúdo do arquivo
while($nome = fgets($arquivo)){
    echo $nome.'<br>';
}
*/
?>
