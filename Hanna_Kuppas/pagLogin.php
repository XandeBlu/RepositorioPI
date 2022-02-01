<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Hanna_Kuppas/css/styleRegistro.css">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo"><img src=""></div>
            <div class="menu">
                <a href="../Hanna_Kuppas/index.php">Home</a>
                <a href='../Hanna_Kuppas/pagLogin.php'>Agende</a>
                <!--a href="../Hanna_Kuppas/pagLogin.php">Login</a-->
                <a href="../Hanna_Kuppas/pagRegistro.php"> Cadastro</a>
                <!--a href="../Hanna_Kuppas/pagSair.php">Sair</a-->
            </div>
        </div>
    </header>
    <div id="main-container">
        <h1>Faça o login para utilizar o sistema.</h1>
        <form id="login-form" action="testelogin.php" method="POST">
        <div class="full-box">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
        </div>
        <div class="full-box spacing">
            <label for="lastname">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha" data-password-validate data-required>
        </div>
        <div class="full-box">
            <input id="btn-submit" type="submit" value="Login" name="submit">
        </div>
        <div>
            <label>O quê? Você ainda nao se registrou no site? <a href="../Hanna_Kuppas/pagRegistro.php">Clique aqui.</a></label>
        </div>
        </form>
    </div>
</body>
</html>