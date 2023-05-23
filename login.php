<?php

session_start(); //iniciar uma sessão

//verificar se houve uma ação dentro da página entrar.php

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    //não está vazio
    //conectar o banco de dados
    include_once('conectar.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    

    //verificar o banco de dados

    $sql = "SELECT * FROM cadastro_clientes WHERE email_cliente = 
    '$email' and senha_cliente = '$senha' ";

    $verificar = $conexao -> query($sql);

    //verificar se o registro é válido

    if(mysqli_num_rows($verificar)<1) 
    {
        //destuir as variáveis
        unset($_SESSION['email_cliente']);
        unset($_SESSION['senha_cliente']);
        header('Location:entrar.php');
    }
    else{
        //criar as variáveis da seção
    $_SESSION['email_cliente']  = $email;
    $_SESSION['senha_cliente'] = $senha;
     header('Location:usuario.php');
    }
}
else{
    header('Location:entrar.php');
}


?>