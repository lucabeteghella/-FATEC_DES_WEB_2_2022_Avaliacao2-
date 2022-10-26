<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
    
    $handle = fopen("cadastrados.txt", "r");
    while (!feof($handle)) {
            $line = fgets($handle);
            echo $line ."<br>";
        }
    fclose($handle);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrados</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <div>
        <p>
            <br><br> 
            <a href="Passando_Parametros.php" class="btn btn-primary">Cadastrar Animais</a>
            <br><br>
            <a href="logout.php" class="btn btn-danger">Sair da conta</a>
        </p>
    </div>
</body>
</html>