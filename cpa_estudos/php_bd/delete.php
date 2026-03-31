<?php

require_once 'connection.php';

$id = 1;

$sql = 'DELETE FROM usuarios WHERE id_usuario = :id_usuario';

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id_usuario', $id);

$queryExecute = $stmt->execute();

if($stmt->rowCount() > 0){
    echo 'Usuario excluido com sucesso';
}else{
    echo 'Nenhum usuário excluido';
}
?>
