<?php
require_once("conexao.php");

// 1. Recebe todos os dados do formulário com tratamento de espaços
$nome = trim(@$_POST['nome']);
$cpf = trim(@$_POST['cpf']);
$telefone = trim(@$_POST['telefone']);
$usuario = trim(@$_POST['email']);
$endereco = trim(@$_POST['endereco']);
$senha = trim(@$_POST['senha']);
$nivel = 'Cliente';

// 2. Validação de campos obrigatórios
if ($nome == "" || $usuario == "" || $senha == "" || $cpf == "") {
    echo "Erro: Preencha Nome, E-mail, CPF e Senha!";
    exit();
}

// 3. REGRA: Senha não pode ser igual ao E-mail
if (strtolower($senha) === strtolower($usuario)) {
    echo "Erro: Por segurança, sua senha não pode ser igual ao seu e-mail!";
    exit();
}

// 4. REGRA: Senha ÚNICA para o Check-in (Importante para sistemas de academia)
$query_senha = $pdo->prepare("SELECT id FROM usuarios WHERE senha = :senha");
$query_senha->bindValue(":senha", $senha);
$query_senha->execute();

if ($query_senha->rowCount() > 0) {
    echo "Erro: Esta senha já está em uso por outro aluno! Escolha outra.";
    exit();
}

// 5. Verifica duplicidade de E-mail ou CPF
$query_duplicado = $pdo->prepare("SELECT id FROM usuarios WHERE usuario = :usuario OR cpf = :cpf");
$query_duplicado->bindValue(":usuario", $usuario);
$query_duplicado->bindValue(":cpf", $cpf);
$query_duplicado->execute();

if ($query_duplicado->rowCount() > 0) {
    echo "Erro: Este E-mail ou CPF já está cadastrado!";
    exit();
}

// 6. INSERÇÃO COMPLETA: Incluindo todos os campos para evitar erros de SQL Strict Mode
$res = $pdo->prepare("INSERT INTO usuarios (nome, cpf, telefone, usuario, endereco, senha, nivel) 
                      VALUES (:nome, :cpf, :telefone, :usuario, :endereco, :senha, :nivel)");

$res->bindValue(":nome", $nome);
$res->bindValue(":cpf", $cpf);
$res->bindValue(":telefone", $telefone);
$res->bindValue(":usuario", $usuario);
$res->bindValue(":endereco", $endereco);
$res->bindValue(":senha", $senha);
$res->bindValue(":nivel", $nivel);

if ($res->execute()) {
    // 7. Criação da graduação inicial (Histórico de Faixas)
    $ultimo_id = $pdo->lastInsertId();

    // Usando prepare para a segunda inserção também, por boas práticas
    $res_grad = $pdo->prepare("INSERT INTO graduacoes (usuario_id, cor_faixa, graus, total_aulas) VALUES (:id, 'Branca', 0, 0)");
    $res_grad->bindValue(":id", $ultimo_id);
    $res_grad->execute();

    // Mensagem idêntica à esperada pelo AJAX no login.php
    echo "Cadastrado com Sucesso!!";
} else {
    echo "Erro ao processar o cadastro no banco de dados.";
}
