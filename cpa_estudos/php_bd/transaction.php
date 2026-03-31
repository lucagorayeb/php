<?php

require_once 'connection.php';

// Importar usuários, Mas se um FALHAR, quero fazer um rollback (nenhum usuário é Importado)

try{
    $pdo -> beginTransaction();

    $user1 = "Luca0001";

    $sql = 'INSERT INTO usuarios (name, username, password) VALUES (:name, :username, :password)';

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':name', $user1);
    $stmt->bindParam(':username', $user1);
    $stmt->bindParam(':password', $user1);

    $stmt->execute();

    $pdo->exec('SAVEPOINT user1_savepoint');

    //if($user1 == "Luca0005"){
    //    $pdo->rollBack();
    //}

    //--------------------------------------------------------------------------------------------------------
    echo "<hr>";

    $user2 = "Luca0002";

    $sql2 = 'INSERT INTO usuarios (name, username, password) VALUES (:name, :username, :password)';

    $stmt2 = $pdo->prepare($sql2);
    $stmt2->bindParam(':name', $user2);
    $stmt2->bindParam(':username', $user2);
    $stmt2->bindParam(':password', $user2);
    $stmt2->execute();

    $pdo->exec('SAVEPOINT user2_savepoint');

    $pdo->exec('ROLLBACK TO user1_savepoint');

    $pdo->commit();


}catch(PDOException){

    echo 'Erro na transação';
    pdo->rollBack();


}





?>
