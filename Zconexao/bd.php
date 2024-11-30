<?php

// Configurações do banco de dados
$servername = ""; // Nome do servidor 
$username = "";        // Nome do usuário do banco de dados 
$password = "";            // Senha do banco de dados 
$dbname = ""; // Nome do banco de dados que você deseja conectar

// Criando a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>