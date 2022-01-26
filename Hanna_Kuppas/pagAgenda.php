<?php
session_start();
include_once('Conexao.php');
    if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true)){
        unset($_SESSION['email']);    
        unset($_SESSION['senha']);  
        header('Location: pagLogin.php');
    }

    $id_usu = $_GET['id_usu'];
    $id_adm = 23; //trocar para o id do user da hanna. obs: tbm mudar la no arquivo de delete

    if($id_usu == $id_adm){
        $sql = "SELECT * FROM procedimentos ORDER BY DiaMes ASC";
    }else{
        $sql = "SELECT * FROM procedimentos WHERE id_usu='$id_usu' ORDER BY DiaMes ASC";
    }
    $resultado = $conn->query($sql);

?>

<html>

    <aside>
    <head>
        <!-- tittle>Hanna Kuppas</tittle -->
        <link href="../Hanna_Kuppas/css/styleAgenda.css" rel="stylesheet">
        <meta name="viewport" content="with=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>Home</title>
    </head>

    <body>
        <header>
            <div class="center">
                <div class="menu">
                    <a <?php echo "href='../Hanna_Kuppas/index_id.php?id_usu=$id_usu'"?>>Home</a>
                    <a <?php echo "href='../Hanna_Kuppas/pagAgenda.php?id_usu=$id_usu'";?>>Agende</a>
                     <?php if($id_usu == $id_adm){
                            echo "<a href='../adm/index.php'>Usuarios</a>";
                            }
                            ?>
                    <!--a href="../Hanna_Kuppas/pagLogin.php">Login</a>
                    a href="../Hanna Kuppas/pagRegistro.html"> Cadastro</a -->
                   <a href="../Hanna_Kuppas/pagSair.php">Sair</a>
                </div>
            </div>
        </header>
        
        <br>
        <br>
        <br>

        <h2 style="text-align: center;">Agende seu procedimento, dia e horário.</h2>
        
        <br>
        <!--div class="box-search">

            <input type="search" class="form-control w-25" placeholder="Pesquisa" id="pesquisar">
            <button onclick="searchData()"><img src="../adm/img/Lupa.png" heidth="13px" width="13px"></button>

        </div-->

        <?php
        /*$user_data = mysqli_fetch_assoc($resultado);
        $data = $user_data['DiaMes'];

        $sqldata = "SELECT * FROM procedimentos WHERE DiaMes='$data'";
        $resultData = $conn->query($sqldata);
        $userDt = mysqli_fetch_assoc($resultData);
        $dataspec = $userDt['DiaMes'];
        $horario = $userDt['Horario'];

        if($data == $dataspec){
            $horarioDb = $user_data['Horario'];
            if($horario==$horarioDb){
                print_r($horarioDb);
                print_r($horario);
            }
        }*/

        ?>
        <div class="search-box">
            <form style="text-align: center;" method="POST" <?php   echo "action='salvarAgendamento.php?id_usu=$id_usu'";?>>
                <label style="color: #323232;"><b>Procedimento:</b></label>
                    <select name="Procedimento">
                        <option>Modeladora</option>
                        <option>Termoterapia</option>
                        <option>Drenagem Linfática</option>
                        <option>Massagem Relaxante</option>
                        <option>Ventosaterapia</option>
                        <option>Massagem de Pedras Quentes</option>
                        <option>Shiatsu</option>
                        <option>Scalda Pés</option>
                        <option>Auriculoterapia</option>
                        <option>Limpeza de Pele</option>
                        <option>Hidratação Facial</option>
                        <option>Peeling Químico</option>
                        <option>Intradermoterapia Pressurizada</option>
                        <option>Design de Sombrancelha</option>
                        <option>Depilação</option>
                        <option>Stril Cell</option>
                        <option>Ultracavitação</option>
                    </select>

                    <label style="color: #323232;"><b>Data:</b></label>
                    <!--input type="date" name="Data" -->
                    <input type="date" name="Data">
                    <!--select name="Data">
                        <option>01/01</option>
                        <option>02/01</option>
                        <option>03/01</option>
                        <option>04/01</option>
                        <option>05/01</option>
                        <option>06/01</option>
                        <option>07/01</option>
                        <option>08/01</option>
                        <option>09/01</option>
                        <option>10/01</option>
                        <option>11/01</option>
                        <option>12/01</option>
                        <option>13/01</option>
                        <option>14/01</option>
                        <option>15/01</option>
                        <option>16/01</option>
                        <option>17/01</option>
                        <option>18/01</option>
                        <option>19/01</option>
                        <option>20/01</option>
                        <option>21/01</option>
                        <option>22/01</option>
                        <option>23/01</option>
                        <option>24/01</option>
                        <option>25/01</option>
                        <option>26/01</option>
                        <option>27/01</option>
                        <option>28/01</option>
                        <option>29/01</option>
                        <option>30/01</option>
                        <option>31/01</option>
                        
                    </select-->

                    <label style="color: #323232;"><b>Horário:</b></label>
                    <select name="Horario">
                        <option>12:00-13:00</option>
                        <option>13:00-14:00</option>
                        <option>14:00-15:00</option>
                        <option>15:00-16:00</option>
                        <option>16:00-17:00</option>
                        <option>17:00-18:00</option>
                    </select>
                    
                    <input id="btn-submit" type="submit" name="submit_agenda" value="Agendar">
            </form >
            
         </div>
<div> 
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <h2 style="text-align: center;">Seus Agendamentos</h2>

        <br>
        <br>
</div> 
        <div class="table">
            <table style="text-align: center;" class="table">
                <!-- caption>Seus Agendamentos</caption -->
                <thead>
                <tr>
                    <?php
                        if($id_usu == $id_adm){
                            echo "<th scope='col'>Cliente</th>";
                        }
                    ?>
                    <th scope="col">Procedimento</th>
                    
                    <th scope="col">Data</th>
                    
                    <th scope="col">Horário</th>
                    <?php
                        if($id_usu == $id_adm){
                            echo "<th  scope='col'> Excluir agendamento</th>";
                        }
                    ?>
                    
                    
                 </tr>
                </thead>
                <tbody>
                <?php
                        while($user_data = mysqli_fetch_assoc($resultado))
                        {
                            echo "<tr>";
                            if($id_usu == $id_adm){
                                $sqlNm = "SELECT * FROM clientes";
                                $result = $conn->query($sqlNm); 
                                while ($userNm = mysqli_fetch_assoc($result)){
                                $id = $userNm['id'];
                                $id_tab = $user_data['id_usu'];
                                if($id==$id_tab){
                                    echo "<td>".$userNm['nome']." ".$userNm['sobrenome']."</td>";
                                }
                            }
                            }
                            $id_proc = $user_data['id_proc'];
                            echo "<td>".$user_data['procedimento']."</td>";
                            echo "<td>".$user_data['DiaMes']."</td>";
                            echo "<td>".$user_data['Horario']."</td>";
                            if($id_usu==$id_adm){
                                echo "<td> <a href=../Hanna_Kuppas/DeleteProcedimento.php?id_proc=$user_data[id_proc]><img src='../adm/img/TrashCan.jpg' width='30px' heidth='30px'></a></td>";
                            }
                            echo "</tr>";
                        }
                    ?>
                </tbody> 
            </table>
        </aside>
<!--script>
    var search = document.getElementById('pesquisar')

search.addEventListener("keydown", function(event){
    if(event.key=="Enter"){
        searchData()
    }
})

function searchData(){
    window.location='pagAgenda.php?search='+search.value
}
</script-->
</html>