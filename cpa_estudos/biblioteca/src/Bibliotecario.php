<?php
namespace luca\biblioteca;

class Bibliotecario{
    public function emprestarLivro(Usuario $usuario, Livro $livro, Estante $estante){
        // O livro tem que estar na estante 
        // O livro tem que estar disponível 
        // O usuário que poder pegar emprestado

        if (!$livro->estaDisponivel()){
            echo 'O livro não está disponível <br>';
            return false;
        }

        if (!$usuario->podePegarEmprestado()){
            echo 'O usuário não pode pegar livros emprestados <br>';
            return false;
        }

        if(!$estante->buscarLivroPorTitulo($livro->getTitulo())){
            echo 'Esse livro não está disponível <br>';
            return false;
        }

        $livro->marcarComoEmprestado();
        $usuario->adicionarLivroEmprestado($livro);
        $estante->removerLivro($livro);
        echo 'Livro emprestado com sucesso';
        return true;
    }

    public function devolverLivro(Usuario $usuario, Livro $livro, Estante $estante){
        // O livro não tem que estar na estante 
        // O livro não tem que estar disponível 
        // O livro tem que ficar disponível

        if ($livro->estaDisponivel()){
            echo 'O livro não está emprestado <br>';
            return false;
        }

        if($estante->buscarLivroPorTitulo($livro->getTitulo())){
            echo 'Esse livro já está na estante <br>';
            return false;
        }

        if(!in_array($livro, $usuario->listarLivrosEmprestados())){
            echo 'O livro não está com o usuário';
            return false;
        }

        $livro->marcarComoDisponivel();
        $usuario->removerLivroEmprestado($livro);
        $estante->adicionarLivro($livro);
        echo 'Livro devolvido com sucesso';
        return true;
    }
}
?>
