<?php 
    session_start();
    if(!empty($_GET['id_proc'])){
        include_once('Conexao.php');

        $id_proc = $_GET['id_proc'];
    
        $sqlSelect = "SELECT * FROM procedimentos WHERE id_proc=$id_proc";
        $result = $conn -> query($sqlSelect);

        if($result->num_rows > 0){

            $sqlDelete = "DELETE FROM procedimentos WHERE id_proc=$id_proc";
            $resultDelete = $conn->query($sqlDelete);

        }
    }
    header("Location: pagAgenda.php?id_usu=1");//mudar aqui

?>