<?php

require_once 'connection.php';

$sql = 'INSERT INTO usuarios(username, name, password) VALUES (:username, :name, :password)';

$stmt = $connection->prepare($sql);

$_name = 'Luca Siqueira';
$_username = 'luca827';
$_password = '123456';

var_dump($stmt);

$stmt->bindParam(':username', $_username);
$stmt->bindParam(':name', $_name);
$stmt->bindParam(':password', $_password);

$stmt->execute();
?>
