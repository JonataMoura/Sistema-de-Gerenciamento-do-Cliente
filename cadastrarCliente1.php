<?php

if(isset($_POST['submit']))
{
   include_once('config.php');
   
    
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    
    $data_nasc = $_POST['data_nasc'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
   
    $result = mysqli_query($conexao, "INSERT INTO clientes(nome,cpf,email,telefone,data_nasc,cidade,estado,endereco) 
    VALUES ('$nome','$cpf','$email','$telefone','$data_nasc','$cidade','$estado','$endereco')");

    header('Location: cadastrarCliente.php');
  }
      
      // print_r($_POST['nome']);
      // print_r('<br>');
      // print_r($_POST['cpf']);
      // print_r('<br>');
      // print_r($_POST['email']);
      // print_r('<br>');
      // print_r($_POST['telefone']);
      // print_r('<br>');
      // print_r($_POST['data_nasc']);
      // print_r('<br>');
      // print_r($_POST['cidade']);
      // print_r('<br>');
      // print_r($_POST['estado']);
      // print_r('<br>');
      // print_r($_POST['endereco']);




    
?>