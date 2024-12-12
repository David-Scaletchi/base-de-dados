<?php
// Configurações da conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = ""; // Deixe vazio se você não configurou uma senha no MySQL
$banco = "teste";

// Criar a conexão
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} 
?>  