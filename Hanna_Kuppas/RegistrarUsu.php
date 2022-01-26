<?php
    session_start();
    include('Conexao.php');
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
            header("Location: pagRegistro.php");
        }elseif($tamSenha < 8){
            header("Location: pagRegistro.php");
            echo "<script> alert('A senha deve ter no minimo 8 caracteres');</script>";
        }elseif($Senha != $confSenha){
            header("Location: pagRegistro.php");
            echo "<script> alert('As duas senha devem ser iguais');</script>";
        }else{
            $result = mysqli_query($conn, "INSERT INTO clientes (Nome, Sobrenome, Senha, Email)
            VALUES ('$Nome','$Sobrenome','$Senha','$Email')");
            header("Location: pagLogin.php");
        }
    }

    
?>