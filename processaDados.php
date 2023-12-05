<?php

// Configurações do banco de dados
$dbHost = 'localhost'; // Endereço do servidor MySQL
$dbName = 'cadastro'; // Nome do seu banco de dados
$username = 'root'; // Seu nome de usuário do MySQL
$password = ''; // Sua senha do MySQL

try {
    // Cria uma nova conexão PDO
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $username, $password);

    // Configura o PDO para lançar exceções em caso de erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Agora é possível executar consultas no banco de dados usando $pdo

    // Por exemplo, você pode usar $pdo->query("SELECT * FROM sua_tabela") para executar uma consulta SELECT

    //Ou $pdo->query("INSERT INTO tabela(names) VALUES ('$variavel')") para armazenar dados;

    // echo "Conexão bem-sucedida!" (retirar comentário para verificar conexão com banco de dados);

} catch (PDOException $e) {
    // Em caso de erro, é capturada e exibida a mensagem de erro
    echo "Erro de conexão: " . $e->getMessage();
}
