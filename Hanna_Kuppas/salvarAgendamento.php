<?php
session_start();
if(isset($_POST['submit_agenda'])){
        include_once('Conexao.php');
        $Procedimento = $_POST['Procedimento'];
        $Data = $_POST['Data'];
        $Horario = $_POST['Horario'];
        $id_usu = $_GET['id_usu'];

        $timestamp = strtotime($Data);
        $Data = date("d-m-Y", $timestamp);
  


        $result_proc = mysqli_query($conn, "INSERT INTO procedimentos (procedimento, DiaMes, id_usu, Horario)
        VALUES ('$Procedimento','$Data','$id_usu','$Horario')");
        
        header("Location: pagAgenda.php?id_usu=$id_usu");
    }else{
    header("Location: pagAgenda.php?id_usu=$id_usu");
    }
?>