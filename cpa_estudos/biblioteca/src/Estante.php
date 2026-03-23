<?php
namespace luca\biblioteca;

class Estante{
    // Array privado de livros 
    private array $livros = [];

    public function adicionarLivro(Livro $livro) : void {
        $this->livros[] = $livro;
    }

    public function removerLivro(Livro $livro) : void{
        $this->livros = array_filter(
            $this->livros, 
            //fn($livroAtual) => $livroAtual !== $livro // Mesma coisa da function abaixo
            function ($livroAtual) use ($livro){
                echo 'Livro Atual '.$livroAtual->getTitulo();
                if($livroAtual === $livro){
                    echo ' - Livro Removido';
                }
                echo '<br>';
                return $livroAtual !== $livro;
            }
        );
    }

    public function getLivros(){
        return $this->livros; 
    }

    public function verificarLivro(){}

    public function buscarLivroPorTitulo(string $titulo) : ?Livro{
        foreach($this->livros as $livro){
            if(str_contains(strtolower($livro->getTitulo()), strtolower($titulo))){
                return $livro;
            }

        //    Exemplo de Normalização
        //    if(strtolower($livro->getTitulo()) === strtolower($titulo)){
        //        return $livro;
        //    }
        }
        return null;
    }

    public function listarLivrosDisponiveis() : array{

        $livrosDisponiveis = [];

        foreach($this->livros as $livroAtual){
            if($livroAtual->estaDisponivel()){
                $livrosDisponiveis[] = $livroAtual;
            }
        }
        return $livrosDisponiveis;

        /* return array_filter(
            $this->livros, 
            function($livroAtual){
                return $livroAtual -> estaDisponivel();
            }
        ); */
    }
}

?>
