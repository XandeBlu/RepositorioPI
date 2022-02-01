<?php
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link href="../Hanna_Kuppas//css/styleRegistro.css" rel="stylesheet">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
    <title>Cadastro</title>

</head>
    <body>
        <header>
            <div class="center">
                <div class="logo"><img src=""></div>
                <div class="menu">
                    <a href="../Hanna_Kuppas/index.php">Home</a>
                    <!--a href="../Hanna_Kuppas/pagProcedimentos.html">Procedimentos</a-->
                    <a href="../Hanna_Kuppas/pagAgenda.php">Agende</a>
                    <a href="../Hanna_Kuppas/pagLogin.php">Login</a>
                    <!-- a href="../Hanna Kuppas/pagRegistro.html"> Cadastro</a -->
                    <!--<a href="pagSair.html">Sair</a>-->
                </div>
            </div>
        </header>
        <div id="main-container">
        <h1>Cadastre-se para acessar o sistema.</h1>
        <form action="RegistrarUsu.php" id="register-form"  method="POST">
            <div class="full-box">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
            </div>
            <div class="half-box spacing">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" placeholder="Digite seu nome" >
            </div>
            <div class="half-box">
                <label for="lastname">Sobrenome</label>
                <input type="text" name="lastname" id="lastname" placeholder="Digite seu sobrenome">
            </div>
            <div class="half-box spacing">
            <label for="lastname">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha">
            </div>
            <div class="half-box">
            <label for="passconfirmation">Confirmação de senha</label>
            <input type="password" name="passconfirmation" id="passwordconfirmation" placeholder="Digite novamente sua senha">
            </div>
            <div>
            <input type="checkbox" name="agreement" id="agreement">
            <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso.</a></label>
            </div>
            <div class="full-box">
            <input id="btn-submit" type="submit" name="submit" value="Registrar">
            </div>
            <div>
                <label>Já tem uma conta no site? <a href="../Hanna_Kuppas/pagLogin.php">Clique aqui.</a></label>
            </div>
        </form>
        </div>
        
    </body>
</html>