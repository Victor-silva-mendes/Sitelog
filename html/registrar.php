<?php
// Incluir o arquivo de conexão
include("conexao.php");

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Aqui você pode realizar operações no banco de dados, como inserir os dados do usuário
    // Exemplo básico para inserção de dados na tabela 'usuarios'
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        echo "Usuário registrado com sucesso!";
    } else {
        echo "Erro ao registrar o usuário: " . $conexao->error;
    }
}

// Fechar a conexão
$conexao->close();
?>