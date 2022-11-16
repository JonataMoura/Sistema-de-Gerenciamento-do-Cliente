<?php

if(isset($_POST['submit']))
{
   include_once('config.php');
   
    
    $nome = htmlentities($_POST['nome']);
    $cpf = htmlentities($_POST['cpf']);
    $email = htmlentities($_POST['email']);
    $telefone = htmlentities($_POST['telefone']);
    
    $data_nasc = htmlentities($_POST['data_nasc']);
    $cidade = htmlentities($_POST['cidade']);
    $estado = htmlentities($_POST['estado']);
    $endereco = htmlentities($_POST['endereco']);
   
    $result = mysqli_query($conexao, "INSERT INTO clientes(nome,cpf,email,telefone,data_nasc,cidade,estado,endereco) 
    VALUES ('$nome','$cpf','$email','$telefone','$data_nasc','$cidade','$estado','$endereco')");
    
    header('Location: cadastrarCliente.php?msg=ok');
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