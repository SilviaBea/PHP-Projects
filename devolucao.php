<?php
    if(!empty($_GET['id_livro'])){
        include_once('config.php');
        $now = date_create('now')->format('Y-m-d H:i:s');
        $id_livro = $_GET['id_livro'];
        if($id_livro != 0){
            $sqlUpdate = "UPDATE  livros SET disponivel=1, data_devolucao='$now' WHERE id_livro=$id_livro";
            $resultUpdate = $conexao->query($sqlUpdate);
        }
       
    }
    header('Location: tela-admin-livrosemprestados.php');
?>