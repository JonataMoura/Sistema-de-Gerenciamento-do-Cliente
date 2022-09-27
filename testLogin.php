<?php
session_start();
// print_r($_REQUEST);
if (isset($_POST['submit']) && !empty($_POST['loginP']) && !empty($_POST['senha'])) {
    // Acessa
    include_once('config.php');
    $loginP = addslashes($_POST['loginP']);
    $senha = addslashes($_POST['senha']);

    // print_r('Login: ' . $loginP);
    // print_r('<br>');
    // print_r('Senha: ' . $senha);

    $sql = "SELECT * FROM manipuladores WHERE loginP = '$loginP' and senha = '$senha' and funcao = 'proprietario'";
    //$pdo->prepare(
    //$sql->execute(array($loginP,$senha));

    $result = $conexao->query($sql);


    // print_r($sql);
    // print_r($result);

    if (mysqli_num_rows($result) < 1) {
        $sql1 = "SELECT * FROM manipuladores WHERE loginP = '$loginP' and senha = '$senha' and funcao = 'funcionario'";

        $result1 = $conexao->query($sql1);

        if (mysqli_num_rows($result1) < 1) {
            // print_r('Não existe');
            unset($_SESSION['loginP']);
            unset($_SESSION['senha']);
            unset($_SESSION['funcao']);
            header('Location: Tela de login.html');
        } else {
            // print_r('Existe');
            $_SESSION['loginP'] = $loginP;
            $_SESSION['senha'] = $senha;
            $_SESSION['funcao'] = 'funcionario';
            header('Location: sistemaFunc.php');
        }
    } else {
        // print_r('Existe');
        $_SESSION['loginP'] = $loginP;
        $_SESSION['senha'] = $senha;
        $_SESSION['funcao'] = 'proprietario';
        header('Location: sistema.php');
    }
} else {
    // Não acessa
    header('Location: Tela de login.html');
}
?>


// print_r('Não existe');
unset($_SESSION['loginP']);
unset($_SESSION['senha']);
header('Location: Tela de login.html');