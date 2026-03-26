<?php

namespace luca\biblioteca;

abstract class Usuario{
    protected array $livrosEmprestados = [];

    public function __construct(protected string $nome){
        $this->nome = $nome;
    }

    abstract function podePegarEmprestado() : bool;

    public function adicionarLivroEmprestado(Livro $livro) : void{
        if($this -> podePegarEmprestado()){
            $this->livrosEmprestados[] = $livro;
        }
    }

    public function removerLivroEmprestado(Livro $livro) : void{
        $this->livrosEmprestados = array_filter(
        $this->livrosEmprestados, 
        function ($livroAtual) use ($livro){
                echo 'Livro Atual '.$livroAtual->getTitulo();
                return $livroAtual !== $livro;
            }
        );
    }

    public function listarLivrosEmprestados() : array{
        return $this->livrosEmprestados;
    }
}


/*  if(strtolower($this->tipo) === 'professor' && count($this->livrosEmprestados) < 3){
        return true; 
    }
    

 */
?>
