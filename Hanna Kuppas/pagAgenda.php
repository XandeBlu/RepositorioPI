<?php
session_start();
include_once('Conexao.php');
    //print_r($_SESSION);
    //print_r('<br>');
    //print_r('INICIOU SESSÃO');
    if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true))
    {
   unset($_SESSION['email']);    
   unset($_SESSION['senha']);  
   header('Location: pagLogin.php');
    }
    $logado = $_SESSION['email'];

    $quantidade = 5;
    $pagina = (isset($_GET['pagina']))?(int)$_GET['pagina']:1;
       $inicio = ($quantidade * $pagina) - $quantidade;
    $sql ="SELECT * FROM procedimentos LIMIT $inicio, $quantidade";
    $resultado = $conn->query($sql);

    if(isset($_POST['submit_agenda'])){
        include_once('Conexao.php');
        $Procedimento = $_POST['Procedimento'];
        $Data = $_POST['Data'];
        $Horario = $_POST['Horario'];

    
      $result_proc = mysqli_query($conn, "INSERT INTO procedimentos (procedimento, DiaMes, Horario)
       VALUES ('$Procedimento','$Data','$Horario')");
    }


?>

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
                    <a href="index.php">Home</a>
                    <a href="pagProcedimentos.html">Procedimentos</a>
                    <a href="pagAgenda.php">Agende</a>
                    <a href="C:\wamp64\www\UltimoVirtualHost\Hanna Kuppas\pagLogin.php">Login</a>
                    <!-- a href="../Hanna Kuppas/pagRegistro.html"> Cadastro</a -->
                   <!-- <a href="pagSair.html">Sair</a> -->
                </div>
            </div>
        </header>
        
        <br>
        <br>
        <br>

        <h2 style="text-align: center;">Agende seu procedimento, dia e horário.</h2>
        
        <br>

        <div class="search-box">
            <form style="text-align: center;" method="POST" action="pagAgenda.php">
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
                    <select name="Data">
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
                        
                    </select>

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
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <h2 style="text-align: center;">Seus Agendamentos</h2>

        <br>
        <br>
        <div class="table">
            <table style="text-align: center;" class="table">
                <!-- caption>Seus Agendamentos</caption -->
                <thead>
                <tr>
                    <th scope="col">Procedimento</th>
                    
                    <th scope="col">Data</th>
                    
                    <th scope="col">Horário</th>

                    <th  scope="col"> Excluir agendamento</th>
                    
                 </tr>
                </thead>
                

                <tbody>
                <?php
              
                        while($user_data = mysqli_fetch_assoc($resultado))
                        {
                            echo "<tr>";
                            echo "<td>".$user_data['Procedimento']."</td>";
                            echo "<td>".$user_data['DiaMes']."</td>";
                            echo "<td>".$user_data['Horario']."</td>";
                            echo "<td>
                            <a class='btn btn-sm btn-danger' href='DeleteProcedimento.php?id' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>          

                            </td>";
                            echo "</tr>";

                        }
                    ?>
                
                </tbody> 
            </table>
        <?php
        $sqlTotal = "SELECT procedimento FROM procedimentos";
        $qrTotal = mysqli_query($conn,$sqlTotal) or die (mysqli_error($conn));
        $numTotal= mysqli_num_rows($qrTotal);
        $totalPagina = ceil($numTotal/$quantidade);

        echo "Total de Registros: $numTotal <br>";
        
        echo '<a href="?menuop=contatos&pagina=1">Primeira Pagina </a>';

        if($pagina>6){
            ?>
            <li class="page-item"><a class="page-link" href="?menuop=contatos&pagina=<?php echo $pagina-1?>"><<</a></li>
            <?php
        }


        for($i=1;$i<=$totalPagina;$i++){
             
            if($i==$pagina){
                echo $i;
            }else{
                echo "<a href=\"?menuop=contatos&pagina=$i\">$i</a>";

            }
        }
        echo "<a href=\"?menuop=contatos&pagina=$totalPagina\">Ultima Página</a>";

        ?>
</html>