<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        
        $sqlInsert = "UPDATE clientes 
        SET nome='$nome',email='$email',telefone='$telefone',data_nasc='$data_nasc',cidade='$cidade',estado='$estado',endereco='$endereco'
        WHERE cpf=$cpf";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>