<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'green8007jk';
    $dbName = 'banco-de-gerenciamaneto';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }
?>