<?php

    if(!empty($_GET['cpf']))
    {
        include_once('config.php');

        $cpf = $_GET['cpf'];

       // print_r('cpf: ' . $cpf);
        $sqlSelect = "SELECT * FROM manipuladores WHERE cpf=$cpf";

        $result = $conexao->query($sqlSelect);

       // print_r($result);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM manipuladores WHERE cpf=$cpf";
            $resultDelete = $conexao->query($sqlDelete);
        }
        
    }
    //header('Location: sistema.php');
    
?>