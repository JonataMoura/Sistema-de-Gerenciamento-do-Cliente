<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $loginP = $_POST['loginP'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $funcao = $_POST['funcao'];
        $data_nascimento = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        
        $sqlInsert = "UPDATE manipuladores 
        SET loginP='$loginP',senha='$senha',nome='$nome',email='$email',telefone='$telefone',funcao='$funcao',data_nascimento='$data_nascimento',cidade='$cidade',estado='$estado',endereco='$endereco'
        WHERE cpf=$cpf";
        $result = $conexao->query($sqlInsert);
        //print_r($result);
    }
    header('Location: sistema.php');

?>