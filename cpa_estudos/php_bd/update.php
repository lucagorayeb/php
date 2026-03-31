<?php

require_once 'connection.php';

// $pdo!
$id = 1;
$novoNome = 'Novo nome de testes';
$novoUsername = 'novo-username';

$sql = 'UPDATE usuarios SET name = :name, username = :username WHERE id_usuario = :id_usuario';

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name', $novoNome);
$stmt->bindParam(':username', $novoUsername);
$stmt->bindParam(':id_usuario', $id);

$queryExecute = $stmt->execute();

if($queryExecute){
    echo 'Usuário atualizado com sucesso<br/>';
    echo $stmt->rowCount().' Linhas afetadas';
}else{
    echo 'Erro ao atualizar';
}
?>
