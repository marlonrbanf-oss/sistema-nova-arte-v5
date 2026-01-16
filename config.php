<?php

$email_adm = 'marlonrbanf@gmail.com';
$nome_sistema = 'Nova Arte';

// Identifica se está no Railway ou Local
if (getenv('MYSQLHOST')) {
    // URL real do seu projeto no Railway
    $url_site = 'https://web-production-5347.up.railway.app/';
} else {
    // URL do seu ambiente local
    $url_site = 'http://localhost/sistema_nova_arte_v5/';
}

// Opcional: Configurações globais que podem ser usadas nos e-mails e cabeçalhos
$telefone_whatsapp = '(48) 99969-2743';
$endereco_academia = 'Rua João Born, 1244 – Ponte do Imaruim, Palhoça – SC';
