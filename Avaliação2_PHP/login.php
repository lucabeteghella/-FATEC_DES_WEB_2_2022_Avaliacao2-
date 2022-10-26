<?php
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'User123' and $_POST['password'] == 'FatecAraras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Fatec Araras';
         header("location: Passando_Parametros.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="Style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1>Login</h1>
        <br>
        
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="username" class="form-control" value="User123">
                <span class="help-block"></span>
            </div>    
        <br>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" value="FatecAraras">
                <span class="help-block"></span>
            </div>
        <br><br>
        
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>    
</body>
</html>