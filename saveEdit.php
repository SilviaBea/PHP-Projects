<?php
    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data_nasci = $_POST['data_nasci'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];


        $sqlUpdate = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',email='$email',telefone='$telefone',sexo='$genero',data_nasci='$data_nasci',cidade='$cidade',estado='$estado',endereço='$endereco'
        WHERE id=$id";

        $result = $conexao->query($sqlUpdate);
    }
    if($_POST['admin'] == 1){
        header('Location: sistema.php');
    }else{
        header('Location: tela-livros-usuario.php');
    }
    
?>