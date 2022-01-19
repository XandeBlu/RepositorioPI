<?php
if(isset($_POST['submit'])){
    include_once('Conexao.php');
    $Nome = $_POST['name'];
    $Sobrenome = $_POST['lastname'];
    $Senha = $_POST['password'];
    $Email = $_POST['email'];
    $confSenha = $_POST['passconfirmation'];

    
    $Senha = str_replace(' ','',$Senha);
    $Email = str_replace(' ','',$Email);
    $confSenha = str_replace(' ','',$confSenha);

    $tamSenha = strlen($Senha);

    if(($Nome == null)||($Sobrenome == null)||($Senha == null)||($Email == null)){
        echo "<script> alert('Digite as informações pedidas');</script>";
    }elseif($tamSenha < 8){
        echo "<script> alert('A senha deve ter no minimo 8 caracteres');</script>";
    }elseif($Senha != $confSenha){
        echo "<script> alert('As duas senha devem ser iguais');</script>";
    }else{
        $result = mysqli_query($conn, "INSERT INTO clientes (nome, sobrenome, senha, email)
        VALUES ('$Nome','$Sobrenome','$Senha','$Email')");
    }
}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link href="../Hanna Kuppas/css/styleRegistro.css" rel="stylesheet">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
    <title>Cadastro</title>

</head>
    <body>
        <header>
            <div class="center">
                <div class="logo"><img src=""></div>
                <div class="menu">
                    <a href="index.php">Home</a>
                    <a href="pagProcedimentos.html">Procedimentos</a>
                    <a href="pagAgenda.php">Agende</a>
                    <a href="../Hanna Kuppas/pagLogin.php">Login</a>
                    <!-- a href="../Hanna Kuppas/pagRegistro.html"> Cadastro</a -->
                    <!--<a href="pagSair.html">Sair</a>-->
                </div>
            </div>
        </header>
        <div id="main-container">
        <h1>Cadastre-se para acessar o sistema.</h1>
        <form action="pagRegistro.php" id="register-form"  method="POST">
            <div class="full-box">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
            </div>
            <div class="half-box spacing">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" placeholder="Digite seu nome" data-required data-min-length="3" data-max-length="16">
            </div>
            <div class="half-box">
                <label for="lastname">Sobrenome</label>
                <input type="text" name="lastname" id="lastname" placeholder="Digite seu sobrenome" data-required data-only-letters>
            </div>
            <div class="half-box spacing">
            <label for="lastname">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha" data-password-validate data-required>
            </div>
            <div class="half-box">
            <label for="passconfirmation">Confirmação de senha</label>
            <input type="password" name="passconfirmation" id="passwordconfirmation" placeholder="Digite novamente sua senha" data-equal="password">
            </div>
            <div>
            <input type="checkbox" name="agreement" id="agreement">
            <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso.</a></label>
            </div>
            <div class="full-box">
            <input id="btn-submit" type="submit" name="submit" value="Registrar">
            </div>
            <div>
                <label>Já tem uma conta no site? <a href="../Hanna Kuppas/pagLogin.php">Clique aqui.</a></label>
            </div>
        </form>
        </div>
        <p class="error-validation template"></p>
    <script src="C:\wamp64\www\UltimoVirtualHost\Hanna Kuppas\js\scriptRegistro.js"></script>
    </body>
</html>