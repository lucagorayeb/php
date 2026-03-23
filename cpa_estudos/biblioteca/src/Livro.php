<?php

namespace luca\biblioteca;

class Livro{

    // Atributos privados
    private bool $disponivel = false;

    public function __construct(private string $autor, private string $titulo){}

    // Metodos de ação

    public function marcarComoEmprestado(){
        $this->disponivel = false;
    }

    public function marcarComoDisponivel(){
        $this->disponivel = true;
    }

    // Metodo de negocio 

    public function estaDisponivel() : bool{
        return $this->disponivel;
    }

    // Metodos getters

    public function getTitulo() : string {
        return $this->titulo;
    }

    public function getAutor() : string {
        return $this->autor;
    }
}

?>
