<?php
$servidor = "localhost";
$usuario = "root";
$senha = "estudozanini15";
$dbname = "hannakupas";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
