<?php
session_start();
include_once('config.php');

if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true)){//se a NÃO existência da sessão do name email testar para verdadeiro faça
    //não acessa
    unset($_SESSION['email']);
    unset($_SESSION['senha']);//limpa a variável sessão 
    header('Location: login.php');//volta pro login
}
$logado = $_SESSION['email'];//cria uma var com a sessão do email

if(!empty($_GET['search'])){

    $data = $_GET['search'];
    $sql = "SELECT * from cliente WHERE id like '%$data%' or email like '%$data%' or nome like '%$data%' ORDER BY id DESC";

}else{
    $sql = "SELECT * from cliente ORDER BY id DESC"; //var que recebe o comando para mostrar o banco de dados em ordem por id 

}

$result= $conexao->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- pega os style do broodstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script language="javascript" src="_javascript/funcoes.js"></script>
    <title>Banco de dados</title>
</head>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, #fce490, #BB9469);
        text-align:center;
    }
    .table-bg{
             background: rgba(0, 0, 0, 0.3);/* o ponto no final mostra o nível de ofuscado*/
             border-radius: 15px 15px 15px 15px; /* borda superior(direita, esquerda), inferiores(direita, esquerda) */
            position: relative;
             top:120px;
            }
        .box-search{
            display: flex; /* coloca como móvel*/
            justify-content:center; /* coloca no centro*/
            gap: .1%;   /* coloca um espaço de 1% entre o digitável*/
        }
        .sair{
            text-align:right;
        }

        /* DO PEIXES FLORA: */

        header#cabecalho{
    border-bottom: 4px #BB9469 ridge; /*grossuro, cor e tipo*/
    height: 100px;
    background: url("../_imagens/logo2.png ") no-repeat 250px -80px;
    background-size: 500px 250px; 
}

/*POSIÇÃO DA IMAGEM do cabecalho (coral)*/
header#cabecalho img#icone {
    position: relative;
    left: -480px;
    top: 120px;
    width: 200px;
}


/*MENUS*/
nav#menus{
    display: block;
}

nav#menus a{
    color: #BB9469;
    text-decoration: none; /*tira o sublinhado*/
}

nav#menus li{
    display: block;
    background-color:rgb(16, 16, 80);
    padding: 10px;
    margin: 4px;
    box-shadow: 0px 0px 4px black;
    transition: background-color 1s; /*coloca transição*/
    text-align: center;
}

nav#menus ul{
    list-style: none;
    text-transform:uppercase ;
    position: absolute;
    top: 100px;
    left: 20px;
    
}

nav#menus li:hover {
    background-color: #fce490;
    text-decoration: none;
}
</style>
<body>
<header id="cabecalho">

<img src="_imagens/coralsf.png" id="icone">

                <!--MENUS-->
                <nav id="menus">
                    <ul>
                        <li onmousemove="mudaFoto('_imagens/casasf.png')" onmouseout="mudaFoto('_imagens/coralsf.png')" ><a href="index.html">Início</a></li>
                        <li onmousemove="mudaFoto('_imagens/peixesf.png')" onmouseout="mudaFoto('_imagens/coralsf.png')" ><a href="peixes.html">Peixes</a></li>
                        <li onmousemove="mudaFoto('_imagens/aquariosf.png')" onmouseout="mudaFoto('_imagens/coralsf.png')" ><a href="aquarios.html">Aquários</a></li>
                        <li onmousemove="mudaFoto('_imagens/promocoessf.png')" onmouseout="mudaFoto('_imagens/coralsf.png')" ><a href="produtosgerais.html">Produtos Gerais</a></li>
                        <li onmousemove="mudaFoto('_imagens/ajudasf.png')" onmouseout="mudaFoto('_imagens/coralsf.png')"><a href="contato.html">Contato</a></li>
                        <li onmousemove="mudaFoto('_imagens/promocoessf.png')" onmouseout="mudaFoto('_imagens/coralsf.png')"><a href="comprar.html">Comprar</a></li>
                        
                        
                    </ul>
                </nav>

            </header>

    <div class="sair">
        <a href="window.location.href='sair.php" class="btn btn-danger me-5">sair</a>
    </div>
    <br>
    <?php
    echo "<h1>Bem vindo <u>$logado</u></h1>"
    ?>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button class="btn btn-primary" onclick="searchData()">
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-search' viewBox='0 0 16 16'>
        <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/>
        </svg>
        </button>
    </div>

    <div class="m-5">
        <table class="table text-white table-bg">
        <thead><!-- tag que é a tabela "mãe", vai ficar fixo o tr(linhas) e th(títulos) -->
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">RG</th>
                <th scope="col">Cidade</th>
                <th scope="col">Bairro</th>
                <th scope="col">Endereço</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Gênero</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col">Telefone</th>
            </tr>
        </thead>
        <tbody><!-- tag que é a tabela filha, vai puxar os tr e td(prenchimentos) -->
            <?php
            while($user_data = mysqli_fetch_assoc($result))//enquanto user_data  receber o que vai escrever
            {
                echo "<tr>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td>".$user_data['cpf']."</td>";//imprime o 
                echo "<td>".$user_data['rg']."</td>";
                echo "<td>".$user_data['cidade']."</td>";
                echo "<td>".$user_data['bairro']."</td>";
                echo "<td>".$user_data['endereco']."</td>";
                echo "<td>".$user_data['data_nasc']."</td>";
                echo "<td>".$user_data['genero']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td>".$user_data['telefone']."</td>";
                echo "<td>
                <a class='btn btn-sm btn-primary' href='
                window.location.href='edita.php?id=$user_data[id]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                </svg>
                </a>


                <a class='btn btn-sm btn-danger' href='
                window.location.href='deleta.php?id=$user_data[id]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                </svg>
                </a>
                </td>";//coloca o botão do lápis (LEMBRAR DE TIRAR AS ÁSPAS DUPLAD E TROCAR POR SIMPLES)
                echo "</tr>";
            }
            ?>
        </tbody>
        </table>
    </div>
   
</body>
<script>
    var search = document.getElementById('pesquisar');
    search.addEventListener("keydown", function(event){
        if(event.key === "Enter"){
            searchData();
        }
    });
    function searchData()
    {
        window.location = 'cadastrados.php?search='+search.value;
    }
</script>
</html>