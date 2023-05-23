<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>M&M Acessórios</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    


</head>

<body>
    <header>
        <div class="logo">
            <img src="img/logo2.jpg" alt="Logotipo M&M Acessórios">
        </div>

        <nav>
            <ul>
               <li><a href="index.html">HOME</a></li> 
               <li><a href="celular.html">CELULARES</a></li>
               <li><a href="roupa.html">ROUPAS</a></li>
               <li><a href="tenis.html">TÊNIS</a></li>
               <li><a href="cadastro.php">CADASTRAR</a></li>
               <li><a href="entrar.php">ENTRAR</a></li>
               <li><a href="contato.php">CONTATO</a></li>
            </ul>
        </nav>
    </header>

    <!-- Inicio da construção do formulário Entrar -->

   <div class="login">
    <div class="logar">

        <h1>LOGIN</h1>

        <form action="login.php" method="post">
            <input type="email" id="email_usuario" name="email" placeholder="Digite o seu e-mail"><br>

            <input type="password" id="senha_usuario" name="senha" placeholder="Digite a sua senha"><br>

            <input type="submit" name="submit" id="btn_logar" value="ENTRAR">
        </form>
    </div>

        <div class="logar" id="logar1">
            <h3 id="id_hoje">Tênis<br> Adidas</h3>
            <p id="p_hoje">R$ 234,99</p>
            <img src="img/adidas.png" alt="Tênis adidas">
            <a href="#">COMPRAR</a>
        </div>

   </div>


    <!-- Inserir os dados do rodapé -->

    <footer>
        <div class="rodape">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="roupas.html">ROUPAS</a></li>
                <li><a href="tenis.html">TÊNIS</a></li>
                <li><a href="contato.html">CONTATO</a></li>
                <li><a href="cadastro.php">CADASTRO</a></li>
                <li><a href="entrar.php">ENTRAR</a></li>
            </ul>
        </div>

        <div class="rodape">
            <p>Rua Manoel Teixeira n°75 - San Martins</p>
            <p>Martinópolis - SP - 19500-000</p>
        </div>

        <div class="rodape">
            <p>Siga as nossas Redes Sociais</p>
            <a href="#"><img src="img/facebook.png" alt="Facebook M&M Acessórios"></a>
            <a href="#"><img src="img/instagram.png" alt="Instagram M&M Acessórios"></a>
            <a href="#"><img src="img/youtube.png" alt="Youtube M&M Acessórios"></a>
        </div>
    </footer>

    <!-- Configurações do javaScript-->

    <script src="js/circle.js"></script>

    
</body>

</html>