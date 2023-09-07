<?php
    session_start();
    $ultimoLocador = $_SESSION['email'];
    if(!empty($_GET['id_livro'])){
        include_once('config.php');
        $now = date_create('now')->format('Y-m-d H:i:s');
        print_r($now);
        $id_livro = $_GET['id_livro'];
        if($id_livro != 0){
            $sqlUpdate = "UPDATE  livros SET disponivel=0, data_aluguel='$now', ultimo_locador= '$ultimoLocador' WHERE id_livro=$id_livro";
            $resultUpdate = $conexao->query($sqlUpdate);
        }
       
    }
    header('Location: tela-livros-usuario.php');
?>