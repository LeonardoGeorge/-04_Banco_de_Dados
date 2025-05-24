<?php

$host = 'localhost';

$username = 'root'; 
$password = '';
$dbname = 'meu_banco';
$dsn = "mysql:host=$host;dbname=$dbname"; // String de conexão com o banco de dados




try {
    // Criando conexão
    $connection = new PDO($dns, $username, $password);

    // Configurando o PDO
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Teste 
    var_dump($connection);
} catch (PDOException $e) {
    echo "Erro na conexão: ". $e->getMessage();
}

?>