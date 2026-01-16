<?php

include_once("config.php");

// 1. Recebe os dados do formulário com segurança
$nome = $_POST['name'];
$telefone = $_POST['telefone'];
$email_cliente = $_POST['email'];
$mensagem_corpo = $_POST['message'];

$assunto = 'Contato do Site - Academia Nova Arte';

// 2. Monta o corpo do e-mail (Formatado para melhor leitura)
$conteudo_email = "Nome: $nome \r\n";
$conteudo_email .= "Telefone: $telefone \r\n";
$conteudo_email .= "E-mail: $email_cliente \r\n\r\n";
$conteudo_email .= "Mensagem: \r\n $mensagem_corpo";

// Converte para o padrão de e-mail (evita erros de acentuação)
$mensagem_final = utf8_decode($conteudo_email);

// 3. Configuração dos Cabeçalhos (Crucial para o Railway/Hospedagens)
// O 'From' DEVE ser o e-mail do seu sistema ou administrador cadastrado no config.php
$remetente = $email_adm;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/plain; charset=utf-8" . "\r\n";
$headers .= "From: " . $remetente . "\r\n";
$headers .= "Reply-To: " . $email_cliente . "\r\n"; // Ao clicar em responder, vai para o cliente
$headers .= "X-Mailer: PHP/" . phpversion();

// 4. Executa o envio
if (@mail($remetente, $assunto, $mensagem_final, $headers)) {
    echo "Enviado com Sucesso!";
} else {
    echo "Erro ao enviar o e-mail, tente novamente ou use o WhatsApp.";
}
