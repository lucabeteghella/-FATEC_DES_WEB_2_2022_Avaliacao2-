<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $raca=$_POST['raca'];
    $idade=$_POST['idade'];
    $nome=$_POST['nome'];

    $handle = fopen("cadastrados.txt", "a");
    fwrite($handle, $raca."\n");
    fwrite($handle, $idade."\n");
    fwrite($handle, $nome."\n\n");
    fflush($handle);
    fclose($handle);
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="STYLE.css">
    <title>Passando Parâmetros</title>
    <style type="text/css">
    body
        {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(90deg, rgb(15, 46, 182), rgb(92, 22, 22));
        }
    </style>
</head>
<body>
    <form action="parametros_post_02.php" method="post">
        <h1>Cadastro de animais</h1>
        <br>
        <label for="firstName">Raça:</label>
        <input type="text" id="firstName" name="firstName"><br><br>
        <label for="age">Idade:</label>
        <input type="number" id="age" name="age"><br><br>
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name"><br><br>
        <input type="submit" value="Enviar"> <br><br> 
        <a href="Animais_Cadastrados.php" class="btn btn-danger">Animais Cadastrados</a> <br><br>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>      
    </form>
</body>
</html>