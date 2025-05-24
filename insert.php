<?php
require_once 'connection.php';

try {
    $sql = 'INSERT INTO usuarios (name, username, password) VALUES (:name, :username, :password)';

    $stmt = $pdo->prepare($sql);

    $_name = 'Leonardo George';
    $_username = 'leonardo_george';
    $_password = password_hash('123456', PASSWORD_DEFAULT); // Criptografia segura da senha

    $stmt->bindParam(':name', $_name);
    $stmt->bindParam(':username', $_username);
    $stmt->bindParam(':password', $_password);

    $stmt->execute();

    echo "Usuário inserido com sucesso!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
