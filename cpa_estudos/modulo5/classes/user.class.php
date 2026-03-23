<?php
class User{

    Use Logger;

    public function createUser(){
        echo "Usuário criado";
        $this->log("Usuário criado");
    }

    public function loginUser(){
        echo "Usuário logado";
        $this->log("Usuário logado");
    }
}


?>
