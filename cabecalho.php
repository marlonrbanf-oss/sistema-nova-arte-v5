<?php
@session_start();
// Importante: Incluir o config aqui para garantir que a variável $url_site exista
include_once("config.php");
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="pt-br">

<head>
  <title>Nova Arte Jiu-Jitsu</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport"
    content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="description" content="Jiu-Jitsu Palhoça, Nova Arte, Fazer Uma Aula experimental ">
  <meta name="author" content="Nova Arte">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">

  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">

  <style>
    .dados-usuarios p {
      color: #fff;
      margin-bottom: 0;
      font-size: 13px;
    }

    .dados-usuarios a {
      color: #fff !important;
      text-decoration: none;
      margin-left: 10px;
    }

    .dados-usuarios a:hover {
      color: #ccc !important;
    }

    .icon {
      color: inherit;
    }

    /* Garante que o menu não fique azul sublinhado caso o CSS falhe */
    .rd-nav-link {
      text-decoration: none !important;
    }
  </style>
</head>

<body>
  <div class="page">
    <header class="section page-header">
      <div class="rd-navbar-wrap rd-navbar-modern-wrap">
        <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
          data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
          data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
          data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
          data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px"
          data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">

          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle"
                  data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <div class="rd-navbar-brand">
                  <a title="Ir para Página Inicial" class="brand" href="index.php">
                    <img src="images/logo-default-196x47.png" alt="Logo" width="196" height="47" />
                  </a>
                </div>
              </div>

              <div class="rd-navbar-main-element">
                <div class="rd-navbar-nav-wrap">
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link"
                        href="index.php">Inicio</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="sobre.php">Sobre</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="contatos.php">Contatos</a>
                    </li>

                    <?php
                    if (!isset($_SESSION['nome_usuario'])) {
                      // Link para login.php sempre em minúsculo
                      echo '<li class="rd-nav-item"><a class="rd-nav-link" href="login.php">Login</a></li>';
                    } else {
                      $pasta_painel = 'painel-cliente';
                      if ($_SESSION['nivel_usuario'] == 'Admin') $pasta_painel = 'painel-adm';
                      if ($_SESSION['nivel_usuario'] == 'Balconista') $pasta_painel = 'painel-balcao';

                      echo '<li class="rd-nav-item"><a class="rd-nav-link" href="' . $pasta_painel . '/index.php">Painel</a></li>';
                    }
                    ?>
                  </ul>
                </div>
              </div>

              <?php if (isset($_SESSION['nome_usuario'])): ?>
                <div style="margin-left: 20px;" class="d-none d-xl-block">
                  <span style="color:white; font-size: 12px;">Olá,
                    <?php echo explode(' ', $_SESSION['nome_usuario'])[0]; ?></span>
                  <a href="logout.php" style="color:red; margin-left:10px;"><i
                      class="fas fa-sign-out-alt"></i></a>
                </div>
              <?php endif; ?>

            </div>
          </div>
        </nav>
      </div>
    </header>