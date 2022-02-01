<?php
    session_start();
    include_once('Conexao.php');

    if(!empty($_GET['search'])){
        $data = $_GET['search'];
        $sql = "SELECT * FROM clientes WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }else {
        $sql = "SELECT * FROM clientes ORDER BY id DESC";
    }
    $result = $conn->query($sql);

    $id_adm = 23;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <div class="center">
        <div class="menu">
            <a <?php echo "href='../Hanna_Kuppas/index_id.php?id_usu=$id_adm'"?>>Home</a>
            <a <?php echo "href='../Hanna_Kuppas/pagAgenda.php?id_usu=$id_adm'";?>>Agende</a>
            <a <?php echo "href='../adm/index.php'";?>>Usuarios</a>
            <a href="../Hanna_Kuppas/pagSair.php">Sair</a>
        </div>
    </div>
</header>
<br>
<div class="box-search">

    <input type="search" class="form-control w-25" placeholder="Pesquisa" id="pesquisar">
    <button onclick="searchData()"><img src="../adm/img/Lupa.png" heidth="13px" width="13px"></button>

</div>
<br>
<div>
    <table class="table">
        <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">nome</th>
              <th scope="col">sobrenome</th>
              <th scope="col">senha</th>
              <th scope="col">email</th>
              <th scope="col">ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            While($user_data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td>".$user_data['sobrenome']."</td>";
                echo "<td>".$user_data['senha']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td> <a href='../adm/EditarInfos.php?id=$user_data[id]'><img src='../adm/img/lapis.jpg' width='30px' heidth='30px'></a> 
                        <a href='../adm/DeleteUsu.php?id=$user_data[id]'><img src='../adm/img/TrashCan.jpg' width='30px' heidth='30px'></a>
                    </td>";
                echo "<tr>";
            }
            ?>
        </tbody>
    </table>
<div>
</body>
<script>
    var search = document.getElementById('pesquisar')

search.addEventListener("keydown", function(event){
    if(event.key=="Enter"){
        searchData()
    }
})

function searchData(){
    window.location='index.php?search='+search.value
}
</script>
</html>