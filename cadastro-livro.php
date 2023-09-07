<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');
    
        $nome_livro = $_POST['nome_livro'];
        $autor = $_POST['autor'];
        $genero_livro = $_POST['genero_livro'];

        $result = mysqli_query($conexao, "INSERT INTO livros(nome_livro, autor, genero_livro, disponivel) 
            VALUES ('$nome_livro','$autor','$genero_livro',1)");

        header('Location: tela-admin-botoes.php');

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Library</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to left, rgb(20, 147, 220), rgb(17, 54, 71));
            font-size: 20px;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 7px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .dataNasci{
            background: none;
            font-family: Arial, Helvetica, sans-serif;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput, .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
        a{
            font-size: 15px;
            text-align: left;
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
<a href="tela-admin-botoes.php">Voltar</a>
    <div class="box">
        <form action="cadastro-livro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Livros</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome_livro" id="nome" class="inputUser" required>
                    <label for="nome_livro" class="labelInput">Nome do Livro</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="autor" id="autor" class="inputUser" required>
                    <label for="autor" class="labelInput">Autor</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="genero_livro" id="genero_livro" class="inputUser" required>
                    <label for="genero_livro" class="labelInput">Genero Literário</label>
                    <br><br>
                    <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>