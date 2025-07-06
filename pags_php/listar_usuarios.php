<?php
$host = 'localhost';
$usuario = 'leitura';
$senha = 'json_rota_ifpr'; // USAR ESSE USUÁRIO PARA CONSULTA DOS ESTUDANTES QUE JÁ POSSUEM ACESSO AO MURAL
$banco = 'cadastro_site';

$conn = new mysqli($host, $usuario, $senha, $banco);

header('Content-Type: application/json');

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["erro" => "Erro de conexão: " . $conn->connect_error]);
    exit;
}

$sql = "SELECT nome_completo, email, matricula FROM usuarios_login";
$result = $conn->query($sql);

$usuarios = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
}

echo json_encode($usuarios);

$conn->close();
?>
