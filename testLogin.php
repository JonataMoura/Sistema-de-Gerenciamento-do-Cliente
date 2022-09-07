<?php
    session_start();
        // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['loginP']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $loginP = $_POST['loginP'];
        $senha = $_POST['senha'];

        // print_r('Login: ' . $loginP);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM manipuladores WHERE loginP = '$loginP' and senha = '$senha'";

        $result = $conexao->query($sql);


        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            // print_r('Não existe');
            unset($_SESSION['loginP']);
            unset($_SESSION['senha']);
            header('Location: Tela de login.html');
        }
        else
        {
           // print_r('Existe');
             $_SESSION['loginP'] = $loginP;
             $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }

    }
    else
    {
        // Não acessa
        header('Location: Tela de login.html');
    }
?>