<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];


        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        $dados = mysqli_fetch_assoc($result);
        $admin = $dados['admin'];
        $id = $dados['id'];
        // print_r('</br>');
        // print_r('</br>');

        // print_r('</br>');


        if(mysqli_num_rows($result) == 1)
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['admin'] = $admin;
            $_SESSION['id'] = $id;

            if($admin == 1){
                //É admin
                header('Location: tela-admin-botoes.php');
            }else{
                //Não é admin
                header('Location: tela-livros-usuario.php');
            }
           
        }
        else
        {
            //Usuário não encontrado
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            unset($_SESSION['admin']);
            header('Location: tela-de-login.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>