<?php

if(isset($_POST['submit']))
{
   include_once('config.php');
   
    $loginP = htmlentities($_POST['loginP']);
    $senha = htmlentities($_POST['senha']);
    $nome = htmlentities($_POST['nome']);
    $cpf = htmlentities($_POST['cpf']);
    $email = htmlentities($_POST['email']);
    $telefone = htmlentities($_POST['telefone']);
    $funcao = htmlentities($_POST['funcao']);
    $data_nascimento = htmlentities($_POST['data_nascimento']);
    $cidade = htmlentities($_POST['cidade']);
    $estado = htmlentities($_POST['estado']);
    $endereco = htmlentities($_POST['endereco']);
   
    $result = mysqli_query($conexao, "INSERT INTO manipuladores(loginP,senha,nome,cpf,email,telefone,funcao,data_nascimento,cidade,estado,endereco) 
    VALUES ('$loginP','$senha','$nome','$cpf','$email','$telefone','$funcao','$data_nascimento','$cidade','$estado','$endereco')");

    header('Location: Formulario.php?msg=ok');
  }
      // print_r($_POST['loginP']);
      // print_r('<br>');
      // print_r($_POST['senha']);
      // print_r('<br>');
      // print_r($_POST['nome']);
      // print_r('<br>');
      // print_r($_POST['cpf']);
      // print_r('<br>');
      // print_r($_POST['email']);
      // print_r('<br>');
      // print_r($_POST['telefone']);
      // print_r('<br>');
      // print_r($_POST['funcao']);
      // print_r('<br>');
      // print_r($_POST['data_nascimento']);
      // print_r('<br>');
      // print_r($_POST['cidade']);
      // print_r('<br>');
      // print_r($_POST['estado']);
      // print_r('<br>');
      // print_r($_POST['endereco']);




    
?>