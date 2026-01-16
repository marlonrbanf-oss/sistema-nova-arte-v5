<?php
@session_start();

// Limpa todas as variáveis de sessão para garantir que nada fique na memória
$_SESSION = array();

// Destrói a sessão no servidor
@session_destroy();

// Redireciona para a tela de login
echo "<script language='javascript'>window.location='login.php'; </script>";
exit();
