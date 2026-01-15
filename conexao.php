<?php

$host = $_ENV['MYSQLHOST'] ?? 'localhost';
$user = $_ENV['MYSQLUSER'] ?? 'root';
$senha = $_ENV['MYSQLPASSWORD'] ?? '';
$banco = $_ENV['MYSQLDATABASE'] ?? 'nova_arte';
$porta = $_ENV['MYSQLPORT'] ?? 3306;

$conn = new mysqli($host, $user, $senha, $banco, $porta);

if ($conn->connect_error) {
	die("Erro de conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
