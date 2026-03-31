<?php

require_once 'connection.php';

//$sql = 'SELECT * FROM usuarios';

$id = 1;

$sql = 'SELECT * FROM usuarios WHERE id_usuario = :id_usuario';

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id_usuario', $id);
$result = $stmt->execute();




// Array associativo
/*
if ($result){
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($data as $linha){
        echo '<h1>'.$linha['username'].'</h1>';
        echo '<pre>';
        var_dump($linha);
        echo '<pre>';
        echo '<hr>';
    }

}
*/

if ($result){
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

    foreach($data as $linha){
        echo '<h1>'.$linha->username.'</h1>';
        echo '<pre>';
        var_dump($data);
        echo '<pre>';
        echo '<hr>';
    }

}


?>
