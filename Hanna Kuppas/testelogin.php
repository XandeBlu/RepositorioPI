<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST ['email']) && !empty($_POST ['password'])){
        //Se existir a váriavel submit (que é criada ao clicar no botão Login) e email e senha serem diferente de vazio ele rodará o código aqui.
        include_once('Conexao.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

       // print_r('Email: '. $email);
       // print_r('<br>');
       // print_r('Senha: '. $password);

       $sql = "SELECT * FROM clientes WHERE email = '$email' and senha = '$password'";
       $result = $conn->query($sql);
       //print_r($result);
if(mysqli_num_rows($result) < 1)
{
    //Se o número de linhas com o registro encontrado for menor que 1, ou seja não encontrou...
    //Redireciona devolta para a página de login
    unset($_SESSION['email']);//destrói email e senha anteriores
    unset($_SESSION['password']);
    header('Location: pagLogin.php');
    
    echo "<script> alert('Nenhum Registro encontrado');</script>";
}
else{
    //Senão o usuário poderá acessar o sistema
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $password;

    header('Location: pagAgenda.php');
}


    
 } else{
        //Não acessa e volta para o Login
        header ('Location: pagLogin.php');
    }
?>