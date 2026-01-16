<?php
require_once("conexao.php");
@session_start();

// Define o fuso horário para garantir que a data de hoje esteja correta
date_default_timezone_set('America/Sao_Paulo');

$senha = isset($_POST['senha']) ? trim($_POST['senha']) : '';
$data_hoje = date('Y-m-d');

if (empty($senha)) {
  echo "<div class='alert alert-warning text-dark shadow-sm'>
            <b>Atenção!</b><br> Digite sua senha de check-in.
          </div>";
  exit();
}

// 1. Busca o aluno pela senha (que deve ser única e diferente da matrícula)
$query = $pdo->prepare("SELECT id, nome FROM usuarios WHERE senha = :senha AND nivel = 'Cliente' LIMIT 1");
$query->bindValue(":senha", $senha);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);

if (count($res) > 0) {
  $id_aluno = $res[0]['id'];
  $nome = $res[0]['nome'];

  // 2. REGRA DE FREQUÊNCIA: Bloquear check-in duplo no mesmo dia
  // Verificamos se já existe um log de check-in para este aluno na data atual
  $check_duplo = $pdo->prepare("SELECT id FROM logs WHERE acao LIKE :acao AND DATE(data) = CURDATE()");
  $check_duplo->bindValue(":acao", "Auto-Checkin realizado pelo aluno: " . $nome . "%");
  $check_duplo->execute();

  if ($check_duplo->rowCount() > 0) {
    echo "<div class='alert alert-info text-dark shadow-sm'>
                <i class='fas fa-info-circle fa-2x mb-2'></i><br>
                <b>OLÁ, " . mb_strtoupper($nome) . "!</b><br>
                Sua presença já foi registrada hoje. Bom treino!
              </div>";
    exit();
  }

  // 3. REGISTRO DE PRESENÇA
  // Incrementa o total de aulas na tabela de graduações para controle de faixas
  $res_presenca = $pdo->prepare("UPDATE graduacoes SET total_aulas = total_aulas + 1 WHERE usuario_id = :id");
  $res_presenca->bindValue(":id", $id_aluno);
  $res_presenca->execute();

  // 4. REGISTRO DE LOG: Auditoria para o Dashboard do Administrador
  $acao = "Auto-Checkin realizado pelo aluno: " . $nome;
  $res_log = $pdo->prepare("INSERT INTO logs (usuario, acao, data) VALUES ('Sistema', :acao, NOW())");
  $res_log->bindValue(":acao", $acao);
  $res_log->execute();

  // 5. MENSAGEM DE SUCESSO
  echo "<div class='alert alert-success shadow-lg border-0'>
            <i class='fas fa-check-circle fa-3x mb-2'></i><br>
            <h4 class='alert-heading'>OSS, " . mb_strtoupper($nome) . "!</h4>
            <p class='mb-0'>Presença confirmada com sucesso.</p>
          </div>";
} else {
  // Caso a senha não coincida com nenhum aluno nível Cliente
  echo "<div class='alert alert-danger text-white border-0 shadow-sm'>
            <i class='fas fa-times-circle fa-2x mb-2'></i><br>
            <b>ACESSO NEGADO!</b><br>
            Senha incorreta ou aluno não encontrado.
          </div>";
}
