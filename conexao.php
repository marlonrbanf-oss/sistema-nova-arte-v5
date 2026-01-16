<?php
// Obtém as variáveis de ambiente do Railway
$host = getenv('MYSQLHOST') ?: 'localhost';
$user = getenv('MYSQLUSER') ?: 'root';
$pass = getenv('MYSQLPASSWORD') ?: '';
$db   = getenv('MYSQLDATABASE') ?: 'ferrovia'; 
$port = getenv('MYSQLPORT') ?: '3306';

try {
    // A string de conexão DEVE começar com mysql:
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
    
    $pdo = new PDO($dsn, $user, $pass);
    
    // Configurações de segurança e erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Se der erro de driver aqui, o problema é na configuração do servidor (extensão faltando)
    die("Erro ao conectar com o banco de dados: " . $e->getMessage());
}
?>
