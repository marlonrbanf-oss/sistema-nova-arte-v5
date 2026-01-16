<?php
// Inclui a conexão e as configurações (onde estão as variáveis $url_site e $email_adm)
require_once("config.php");
require_once("conexao.php");

$email_usuario = trim($_POST['email-recuperar']);

// Verifica se o campo não está vazio
if ($email_usuario == "") {
	echo 'Preencha o campo de e-mail!';
	exit();
}

// 1. Consulta o usuário no banco de dados
$res = $pdo->prepare("SELECT * from usuarios where usuario = :usuario");
$res->bindValue(":usuario", $email_usuario);
$res->execute();

$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados);

if ($linhas > 0) {
	$nome_usu = $dados[0]['nome'];
	$senha_usu = $dados[0]['senha'];
	// $nivel_usu = $dados[0]['nivel']; // Variável capturada mas não usada no e-mail
} else {
	echo 'Este email não está cadastrado no site!';
	exit();
}

// 2. Configurações de envio de e-mail
$to = $email_usuario;
$subject = 'Recuperação de Senha - Nova Arte Jiu-Jitsu'; // Assunto atualizado

// Corpo do e-mail em HTML
$message = "
<html>
<head>
 <title>Recuperação de Senha</title>
</head>
<body>
    <p>Olá <b>$nome_usu</b>!</p>
    <p>Você solicitou a recuperação de sua senha para o sistema da Nova Arte Jiu-Jitsu.</p>
    <p>Sua senha atual é: <b>$senha_usu</b></p>
    <br>
    <p>Para acessar o sistema, <a href='$url_site' target='_blank'>clique aqui</a>.</p>
    <hr>
    <p><i>Este é um e-mail automático, por favor não responda.</i></p>
</body>
</html>
";

// Cabeçalhos para envio de e-mail HTML
$remetente = $email_adm;
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: ' . $remetente . "\r\n" .
	'Reply-To: ' . $remetente . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

// 3. Envia o e-mail e retorna a mensagem para o AJAX
if (@mail($to, $subject, $message, $headers)) {
	echo "Senha enviada para o seu Email!";
} else {
	// Caso o servidor de e-mail falhe, ainda mostramos a senha para o usuário (opcional em testes)
	echo "Erro ao enviar e-mail. Sua senha é: $senha_usu";
}
