<?php
    unset($_SESSION['email']);    
    unset($_SESSION['senha']); 
    header('Location: index.php');
    print_r('Sessão destruida');
   
   ?>

   <!-- esse código html não está sendo rodado-->
 <html>
    <head>
        <!-- tittle>Hanna Kuppas</tittle -->
        <link href="css/styleAgenda.css" rel="stylesheet">
        <meta name="viewport" content="with=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>Home</title>
    </head>

    <body>
        <header>
            <div class="center">
                <div class="menu">
                    <a href="index.html">Home</a>
                    <a href="pagProcedimentos.html">Procedimentos</a>
                    <a href="pagAgenda.html">Agende</a>
                    <a href="../Hanna Kuppas/pagLogin.html">Login</a>
                    <!-- a href="../Hanna Kuppas/pagRegistro.html"> Cadastro</a -->
                    <a href="pagSair.html">Sair</a>
                </div>
            </div>
        </header>

        <br>
        <br>
        <br>

        <h2 style="text-align: center;"> Você quer mesmo sair?</h2>

        <div class="texto-sobre">
            <button>SIM</button>
        </div>

        <div class="texto-sobre">
            <button>NÃO</button>
        </div>

        <div class="extras">
            <!-- Div do Social Media-->
        </div>

    </body>
</html>