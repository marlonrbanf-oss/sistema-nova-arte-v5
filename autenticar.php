<?php
require_once("conexao.php");
@session_start();

// 1. Verifica se os campos não estão vazios e limpa espaços extras
$usuario = isset($_POST['username']) ? trim($_POST['username']) : '';
$senha = isset($_POST['pass']) ? trim($_POST['pass']) : '';

if (empty($usuario) || empty($senha)) {
	echo "<script language='javascript'>window.location='login.php'; </script>";
	exit();
}

// 2. Consulta usando as colunas reais: usuario e senha
// Nota: Certifique-se que no banco de dados a senha não esteja criptografada. 
// Se usar MD5 ou Password_Hash, a lógica precisará ser ajustada.
$res = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha");
$res->bindValue(":usuario", $usuario);
$res->bindValue(":senha", $senha);
$res->execute();

$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados);

if ($linhas > 0) {
	// 3. Define as variáveis de sessão
	$_SESSION['id_usuario'] = $dados[0]['id'];
	$_SESSION['nome_usuario'] = $dados[0]['nome'];
	$_SESSION['email_usuario'] = $dados[0]['usuario'];
	$_SESSION['nivel_usuario'] = $dados[0]['nivel'];

	$nivel = $dados[0]['nivel'];

	// 4. Redirecionamento baseado no nível
	if ($nivel == 'Admin') {
		echo "<script language='javascript'>window.location='painel-adm/index.php'; </script>";
		exit();
	} else if ($nivel == 'Balconista') {
		echo "<script language='javascript'>window.location='painel-balcao/index.php'; </script>";
		exit();
	} else {
		// Redireciona nível 'Cliente' ou qualquer outro para a pasta painel-cliente
		echo "<script language='javascript'>window.location='painel-cliente/index.php'; </script>";
		exit();
	}
} else {
	// 5. Caso os dados estejam incorretos
	echo "<script language='javascript'>window.alert('Dados Incorretos!!'); window.location='login.php'; </script>";
	exit();
}
?>
//Login: admin@novaarte.com

//Senha: admin123

//Destino: O script lerá o nível Admin e te enviará automaticamente para painel-admin/index.php.