<?php

$host = 'localhost';
$usuario = 'root';
$senha = 'ThisisR0ta';
$banco = 'rotaifpr';

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
  die("Erro de conexão com o banco: " . $conn->connect_error);
}