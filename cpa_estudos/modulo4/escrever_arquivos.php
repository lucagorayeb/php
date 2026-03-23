<?php

// filesystem
// f(algumacoisa) - file (arquivo)
// read (ler) - r
// write (escrever) - w
// resource = recurso
// eof = end of file (fim do arquivo);
// fwrite - write (escrever)
// truncar - truncate (truncar)
// append - append (acrescentar) - Cria o arquivo caso ele não exista.

// Modos:
// a - Cria o arquivo se ele não existir, posiciona o ponteiro no final.
// c - Abre o cursor e posiciona o cursor no inicio do arquivo.
// w - Cria o arquivo se ele não existir, apaga o conteúdo do arquivo anterior.
// w+ - Cria o arquivo se ele não existir, apaga o contéudo do arquivo anterior e posiciona o ponteiro no final.
// r - Abre o arquivo para a leitura, posiciona o ponteiro no início  e gera um erro se não existir.
// r+ - Abre o arquivo para leitura e escrita, posiciona o ponteiro no inicio e gera um erro se o arquivo não existir.
// x - Criação Exclusiva - Abre o arquivo para escrita somente, se ele já existir ele retorna  false.


$arquivo = fopen("nome.txt", "a");

fwrite($arquivo, "\n");
fwrite($arquivo, 'Mariano');

fclose($arquivo);
?>
