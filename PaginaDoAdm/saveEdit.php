<?php

    include_once("Conexao.php");

    if(isset($_POST['update'])){

        $id = $_POST['id'];
        $Nome = $_POST['nome'];
        $Sobrenome = $_POST['sobrenome'];
        $Senha = $_POST['senha'];
        $Email = $_POST['email'];

        $sqlUpdate = "UPDATE clientes SET nome='$Nome', sobrenome='$Sobrenome', senha='$Senha', email='$Email' WHERE id=$id";
        
        $result = $conn->query($sqlUpdate);

    }
    header('Location: ListaUsu.php');
?>