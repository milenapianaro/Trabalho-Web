<?php
$host = 'localhost';          // ou 127.0.0.1
$usuario = 'root';            // usuário padrão do XAMPP/WAMP
$senha = '';                  // normalmente vazio no XAMPP
$banco = 'cadastro_site';     // nome do banco que criamos

$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>