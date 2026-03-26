<?php
namespace luca\biblioteca;

class Visitante extends Usuario{
    private const MAX_LIVROS_EMPRESTADOS = 0;

    public function podePegarEmprestado() : bool{
        return count($this->livrosEmprestados) < self::MAX_LIVROS_EMPRESTADOS;
    }
}

?>
