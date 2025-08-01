<?php
require_once '../conexao.php';

$nome = $_POST['nome_completo'] ?? '';
$genero = $_POST['genero'] ?? '';
$data_nascimento = $_POST['data_nascimento'] ?? '';
$email = $_POST['email'] ?? '';
$matricula = $_POST['matricula'] ?? '';
$senha = $_POST['senha'] ?? '';

if (empty($nome) || empty($email) || empty($senha)) {
  echo "Por favor, preencha todos os campos obrigatórios.";
  exit;
}

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO usuarios_login (nome_completo, genero, data_nascimento, email, matricula, senha_hash) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nome, $genero, $data_nascimento, $email, $matricula, $senha_hash);

if ($stmt->execute()) {
    header("Location: cadastro_usuario_sucesso.php");
    exit;
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

$stmt->close();
$conn->close();
?>