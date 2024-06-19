<?php
// Configurações do banco de dados
$host = "localhost"; // endereço do servidor do banco de dados
$usuario = "root"; // nome de usuário do banco de dados
$senha = ""; // senha do banco de dados
$banco = "transportadora_lg"; // nome do banco de dados

// Conectar ao banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

// Definir o conjunto de caracteres para utf8 (opcional)
$conexao->set_charset("utf8");
?>