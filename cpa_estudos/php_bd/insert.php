<?php

require_once 'connection.php';

$sql = 'INSERT INTO usuarios(username, name, password) VALUES (:username, :name, :password)';



$_name = 'Luca Siqueira Assis';
$_username = 'luca102';
$_password = '123456owf';

//var_dump($stmt);

$stmt->bindParam(':username', $_username);
$stmt->bindParam(':name', $_name);
$stmt->bindParam(':password', $_password);

if($stmt->execute()){
    if($stmt->rowCount() > 0){
        echo 'usuario inserido com sucesso';
    }else{
        echo 'Nenhum dado foi inserido no banco';
    }
}
?>
