<?php
require_once 'env.php';
$dns = "mysql:host=$ENV_HOST;dbname=$ENV_DBNAME;"; // String de conexão com o banco de dados




try {
    // Criando conexão
    $pdo = new PDO($dns, $ENV_USERNAME, $ENV_PASSWORD);
    echo "Conexão bem sucedida!";
    echo '<hr>';
    

    // Configurando o PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}