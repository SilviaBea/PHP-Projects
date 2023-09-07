<?php
    $dbHost = '127.0.0.1';
    $dbUsername = 'root';
    $dbPassword = 'root';
    $dbName = 'baseusuarios';
    $dbPort = '3307';


    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName,$dbPort);


    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }



?>