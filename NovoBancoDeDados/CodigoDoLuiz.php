<?php
session_start();
?>
<head>
<meta charset="UTF-8">
<link href="../Hanna Kuppas/css/styleRegistro.css" rel="stylesheet">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
<title>Cadastro</title>

</head>
<body>
    <div id="main-container">
    <h1>Cadastre-se para acessar o sistema.</h1>
    <form id="register-form" method="POST" action="processa.php">
        <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
        </div>
        <div class="half-box spacing">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" data-required data-min-length="3" data-max-length="16">
        </div>
        <div class="half-box">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobrenome" data-required data-only-letters>
        </div>
        <div class="half-box spacing">
        <label for="sobrenome">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" data-password-validate data-required>
        </div>
        <div class="half-box">
        <label for="passconfirmation">Confirmação de senha</label>
        <input type="text" name="passconfirmation" id="passwordconfirmation" placeholder="Digite novamente sua senha" data-equal="password">
        </div>
        <div>
        <input type="checkbox" name="agreement" id="agreement">
        <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso.</a></label>
        </div>
        <div class="full-box">
        <input id="btn-submit" type="submit" value="Registrar">
        </div>
        <div>
            <label>Já tem uma conta no site? <a href="../Hanna Kuppas/pagLogin.html">Clique aqui</a></label>
        </div>
    </form>
    </div>
    <p class="error-validation template"></p>
<script src="../Hanna Kuppas/js/scriptRegistro.js"></script>
</body>
</html>