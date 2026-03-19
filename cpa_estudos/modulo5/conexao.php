<?php
class Conexao{

    private string $conxao;

    public function __construct(){
        // conectar-se ao banco de dados
        $this->conexao = 'Conectado com o banco de dados';
        echo "Conexão com  o banco de dados criada.\n";
    }

    public function __destruct(){
        $this->conxao = '';
        echo "Conexão encerrada com o banco de dados\n";
    }

    public function consulta(){
        echo "Realiza consulta no banco de dados.\n";
    }
}

$conexao = new Conexao();
$conexao->consulta();
$conexao->encerrarConexao();
unset($conexao);
?>
