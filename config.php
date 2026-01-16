<?php

$email_adm = 'marlonrbanf@gmail.com';

// Aqui está o segredo: Identificar se está no Railway ou no Computador
if (getenv('MYSQLHOST')) {
    // URL do seu site no Railway (substitua pelo seu link real do Railway)
    $url_site = 'https://' . $_SERVER['HTTP_HOST'] . '/';
} else {
    // URL para quando você estiver testando no seu PC (Pop!_OS)
    $url_site = 'http://localhost/sistema_nova_arte_v5/';
}

// Para evitar conflitos, vamos usar as variáveis que já configuramos no conexao.php
// Se você já tem o conexao.php, este arquivo config deve focar apenas em URLs e nomes.
$nome_sistema = 'Nova Arte';
