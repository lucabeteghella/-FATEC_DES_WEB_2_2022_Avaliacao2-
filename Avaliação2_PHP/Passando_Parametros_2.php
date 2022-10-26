<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passando Parâmetros</title>
</head>
<body>
<?php
//CRIOU-SE DUAS VARIÁVEIS
$raca = $_POST['firstname'];
$idade = $_POST['age'];
$nome = $_POST['name'];

function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}

if(validar_post($_POST['firstname']) and validar_post($_POST['age']) and validar_post($_POST['name'])){
    echo '<br><br>';
    echo 'Raça: '.$_POST['firstname'];
    echo '<br><br>';
    echo 'Idade: '.$_POST['age'];
    echo '<br><br>';
    echo 'Nome: '.$_POST['name'];
    /*
    Inserir os dados no banco de dados MySQL
    */

   require_once('Dados_do_Banco.php');

   // Criar Conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO animais (raca, idade, nome)
VALUES ('$raca', '$idade', '$nome')";

if (mysqli_query($conn, $sql)) {
    echo "<br><br>Os dados foram adicionados ao banco com sucesso.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

?>
</body>
</html>