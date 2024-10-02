

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="javascript" src="_javascript/funcoes.js"></script>
    <title>Login-PeixesFlora</title>
</head>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, #fce490, #BB9469);
    }
    .form{
        background-color: #ffffff;
        position: absolute;
        top: 25%;
        left: 40%;
        padding: 80px;
        border-radius:15px 0px 15px 0px ;
        color: rgb(16, 16, 80);
    }
    .dig{
        border: none;
        font-size: 15pt;
        border: none;
        border-bottom: 1px solid black;/* coloca borda em baixo */
        outline: none;/* tira a borda quando clica */
    }
    .enter{
        border: none;
        border-radius: 15px 0px 15px 0px;
        width: 100%;/* Ocupação horizontal */
        padding: 10px; /* Ocupação do vertical */
        font-size: 15pt;
    }
    .enter:hover{
        background-color:#BB9469;
    }
    .volta{
        position: absolute;
        left: 80%;
        top: 30%; 
    }
    .direcionamento-cad{
        border-radius:15px;
        font-size: 18pt;
        padding:15px;
        width: 40%;
        background-color:#DDD9CD;
        text-decoration:none;
        color:black;
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
    left: 280px;
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
<div class="volta">
        <a class="direcionamento-cad" href="cadastro.php">Cadastro</a>
    </div>
    
    <div class="form">
        <img src="/_img/peixe-login.png"/>
        <h1>Login</h1>
        <form action="testaLogin.php" method="POST">
            <p><input type="email" name="email" placeholder="Email" class="dig"></p>
            <br><br>
            <p><input type="password" name="senha" placeholder="Senha" class="dig"></p>
            <br><br>
            <input type="submit" class="enter" name="submit" value="Enviar">
        </form>
    </div>

  
</body>
</html>