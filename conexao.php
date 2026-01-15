<?php
// Dados da conexão (priorizando variáveis de ambiente da hospedagem)
$host = $_ENV['MYSQLHOST'] ?? 'localhost';
$user = $_ENV['MYSQLUSER'] ?? 'root';
$pass = $_ENV['MYSQLPASSWORD'] ?? '';
$db   = $_ENV['MYSQLDATABASE'] ?? 'nova_arte';
$port = $_ENV['MYSQLPORT'] ?? 3306;

try {
    // Criando a conexão via PDO (necessário para os códigos anteriores)
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4", $user, $pass);
    
    // Configura para mostrar erros caso algo dê errado no SQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (Exception $e) {
    echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
    exit();
}
?>
