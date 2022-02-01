<?php
    if(!empty($_GET['id'])){
        include_once('Conexao.php');
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM clientes WHERE id=$id";
        $result = $conn->query($sqlSelect);
    

        if($result->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){

                $Nome = $user_data['nome'];
                $Sobrenome = $user_data['sobrenome'];
                $Senha = $user_data['senha'];
                $Email = $user_data['email'];
            }
        }else {
            header('Location: index.php');
        }
    }

    else {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link href="C:\wamp64\www\MeuVirtualHost\RepositorioPI-BranchParaTestes\Hanna_Kuppas\css\styleRegistro.css" rel="stylesheet">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
    <title>Alteração de dados</title>

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
        <h1>Altere seus dados a baixo.</h1>
        <form action="saveEdit.php" method="POST">
            <div class="full-box">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" value="<?php echo $Email ?>">
            </div>
            <div class="half-box spacing">
                <label for="name">Nome</label>
                <input type="text" name="nome" id="name" placeholder="Digite seu nome" value="<?php echo $Nome ?>">
            </div>
            <div class="half-box">
                <label for="lastname">Sobrenome</label>
                <input type="text" name="sobrenome" id="lastname" placeholder="Digite seu sobrenome" value="<?php echo $Sobrenome ?>">
            </div>
            <div class="full-box spacing">
            <label for="password">Senha</label>
            <input type="password" name="senha" id="password" placeholder="Digite sua senha" value="<?php echo $Senha ?>">
            </div>
            <div class="full-box">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input id="update" type="submit" name="update" value="Salvar">
            </div>
        </form>
        </div>
    </body>
</html>