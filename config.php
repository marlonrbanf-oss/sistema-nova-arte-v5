<?php
// Configurações do Banco de Dados (Puxando do Railway)
$usuario = getenv('MYSQLUSER') ?: 'root';
$senha = getenv('MYSQLPASSWORD') ?: '';
$banco = getenv('MYSQLDATABASE') ?: 'nova_arte';
$host = getenv('MYSQLHOST') ?: 'localhost';
$port = getenv('MYSQLPORT') ?: '3306';

// URL do Sistema - IMPORTANTE: Sem a barra no final para evitar links duplos
$url_site = "https://web-production-5347.up.railway.app";

// E-mail do administrador
$email_adm = "seu-email@dominio.com";
