<?php
include_once "conexao.php";


// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['nome'])) {
    $nome = $conn->real_escape_string($_POST['nome']); // Evitar injeção de SQL

    echo $nome;

    // Inserir o nome na tabela
    $sql = "INSERT INTO tabela (nome) VALUES ('$nome')"; // Substitua "usuarios" pelo nome da sua tabela

    if ($conn->query($sql) === TRUE) {
        echo " Nome salvo com sucesso!";
    } else {
        echo "Erro ao salvar o nome: " . $conn->error;
    }
} else {
    echo "Por favor, insira um nome.";
}

// Fechar conexão
$conn->close();

?>
