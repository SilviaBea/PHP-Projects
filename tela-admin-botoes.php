<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Library</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to left, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .tela-admin{
            background-color: rgba(0, 0, 0, 0.7);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 15px;
            border-radius: none;
            outline: none;
            font-size: 15px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <a href="tela-de-login.php">Sair</a>
    <div class="tela-admin">
        <h1>Bem vindo a visão de administrador</h1>
        <a href="tela-admin-usuarios.php">Listar/Editar Usuários Cadastrados</a>
        <br>  <br>  <br>
        <a href="tela-admin-livros.php">Visualizar Livros Disponíveis para Empréstimo</a>
        <br>  <br>  <br>
        <a href="tela-admin-livrosemprestados.php">Visualizar Livros Emprestados</a>
        <br>  <br>  <br>
        <a href="cadastro-livro.php">Cadastrar Novo Livro</a>
    </div>
</body>
</html>