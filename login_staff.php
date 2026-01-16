<?php
include_once("conexao.php");
include_once("config.php"); // Certifique-se de que o config.php existe para usar a $url_site
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Nova Arte BJJ - Acesso Restrito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <style>
        body {
            background-color: #1a1a1a;
            font-family: 'Source Sans Pro', sans-serif;
            /* Se quiser uma imagem de fundo no body, use o caminho relativo */
            background-image: url('images/background-login.jpg');
            background-size: cover;
        }

        .login-block {
            float: left;
            width: 100%;
            padding: 80px 0;
        }

        .login-sec {
            padding: 50px 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
        }

        .btn-staff {
            background-color: #000;
            border-color: #000;
            color: #fff;
            border-radius: 4px;
            padding: 12px;
            font-weight: bold;
            width: 100%;
            transition: 0.3s;
            cursor: pointer;
        }

        .btn-staff:hover {
            background-color: #333;
            color: #fff;
            text-decoration: none;
        }

        .label-input {
            font-weight: 700;
            font-size: 12px;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: block;
            margin-bottom: 5px;
        }

        .input-field {
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            outline: none;
        }

        .input-field:focus {
            border-color: #000;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 25px;
            font-size: 13px;
            color: #666;
            text-decoration: none;
        }

        .back-link:hover {
            color: #000;
        }

        .badge-staff {
            background: #000;
            color: #fff;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 10px;
            margin-bottom: 15px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container">
        <section class="login-block">
            <div class="row justify-content-center">
                <div class="col-md-5 login-sec text-center">
                    <div class="badge-staff">ÁREA RESTRITA</div>
                    <h4 class="mb-4" style="font-weight: 900; letter-spacing: 2px;">ADMINISTRAÇÃO</h4>

                    <form method="post" action="autenticar.php">
                        <div class="text-left">
                            <label class="label-input">E-mail Profissional</label>
                            <input class="input-field" type="email" name="username" placeholder="seu@email.com"
                                required>

                            <label class="label-input">Senha de Acesso</label>
                            <input class="input-field" type="password" name="pass" placeholder="******" required>
                        </div>

                        <button type="submit" class="btn btn-staff">AUTENTICAR EQUIPE</button>
                    </form>

                    <a href="login.php" class="back-link">
                        <i class="fas fa-arrow-left"></i> Voltar para Acesso Aluno
                    </a>
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <?php if (file_exists('js/mascaras.js')): ?>
        <script src="js/mascaras.js"></script>
    <?php endif; ?>
</body>

</html>