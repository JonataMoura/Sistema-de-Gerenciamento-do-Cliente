<?php

if(isset($_POST['submit']))
{
   include_once('config.php');
   
    $loginP = $_POST['loginP'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $funcao = $_POST['funcao'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
   
    $result = mysqli_query($conexao, "INSERT INTO manipuladores(loginP,senha,nome,cpf,email,telefone,funcao,data_nascimento,cidade,estado,endereco) 
    VALUES ('$loginP','$senha','$nome','$cpf','$email','$telefone','$funcao','$data_nascimento','$cidade','$estado','$endereco')");

    header('Location: Formulario.php');
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