<!-- Configurações do PHP -->

<?php

// iniciar uma sessão

session_start();

if((!isset($_SESSION['email_cliente'])==True) 
and (!isset($_SESSION['senha_cliente'])==True)
)
{
// destruir as variáveis
unset($_SESSION['email_cliente']);
unset($_SESSION['senha_cliente']);
header('Location:entrar.php');
}
else{
    //criar uma variável de acesso
    $logado = $_SESSION['email_cliente'];
}

?>

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

    <!-- Inicio da construção da secão do Usuário -->

        <section class="barra_top">
            <div class="barra">
                <h1>Área do Usuário</h1>
            </div>

            <div class="barra">
                <a href="sair.php">SAIR</a>
            </div>
        </section>

        <section class="usuario">
            <?php
                echo "<h2>Olá,$logado</h2>";
            ?>
            <p>Seja Bem_vindo ao M&M Acessórios</p>
        </section> 

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

    <!-- Configurações do PHP -->

    <?php

    if(isset($_POST['submit'])){

        include_once('conectar.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sexo = $_POST['sexo'];

        $clientes = mysqli_query($conexao, "INSERT INTO cadastro_clientes(nome_cliente,
        email_cliente,senha_cliente,sexo_cliente) VALUES ('$nome','$email','$senha','$sexo')");

    }

    ?>
    
</body>

</html>