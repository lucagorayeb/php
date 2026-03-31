<?php

require_once 'connection.php';

$sql = 'SELECT * FROM tabelaquenaoexiste';
$stmt = $pdo->prepare($sql);

try{

    $stmt->execute();

}catch(PDOException $e){

    echo 'Erro de conexão: '.$e->getMessage();
    echo '<pre>';
    var_dump($stmt->errorCode());


}
?>
