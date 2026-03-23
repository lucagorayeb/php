<?php
namespace luca\biblioteca;

class Aluno extends Usuario{
    private int $maximoLivrosEmprestados = 1;

    public function podePegarEmprestado() : bool{
        return count($this->livrosEmprestados) < $this->maximoLivrosEmprestados;
    }
}

?>
