<?php
// O segredo é garantir que o Host nunca fique vazio ou apenas 'localhost'
$host = getenv('MYSQLHOST') ?: 'mysql.railway.internal'; 
$user = getenv('MYSQLUSER') ?: 'root';
$pass = getenv('MYSQLPASSWORD') ?: 'QoCimYvbosDJSTNoGsAmwHhhrsbxuAww';
$db   = getenv('MYSQLDATABASE') ?: 'ferrovia'; 
$port = getenv('MYSQLPORT') ?: '3306';

try {
    // Adicionamos o host e a porta explicitamente para evitar o erro de socket
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
    
    $pdo = new PDO($dsn, $user, $pass);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Se o erro persistir, ele nos dirá exatamente o porquê
    die("Erro ao conectar com o banco de dados: " . $e->getMessage());
}
