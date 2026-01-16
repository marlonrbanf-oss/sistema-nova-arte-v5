<?php
// Usar getenv() é o jeito mais seguro no Railway/Linux
$host = getenv('MYSQLHOST') ?: 'localhost';
$user = getenv('MYSQLUSER') ?: 'root';
$pass = getenv('MYSQLPASSWORD') ?: '';
$db   = getenv('MYSQLDATABASE') ?: 'ferrovia'; // Ajustado conforme sua imagem
$port = getenv('MYSQLPORT') ?: 3306;

try {
    // Criando a conexão via PDO
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4", $user, $pass);
    
    // Configurações de erro e busca
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Em produção, é melhor não mostrar a senha no erro, mas para testar deixaremos o getMessage
    echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
    exit();
}
?>
