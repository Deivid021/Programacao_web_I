<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST['usuario'];
        $pass = $_POST['senha'];

        if($user == 'adm' && $pass = '123'){
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            $_SESSION['inicio'] = date("d/m/y H:i:s");
            $_SESSION['inicio_timestamp'] = time();

            setcookie("usuario", $user, time() + (60 * 5), "/");
            setcookie("inicio", date("d/m/y H:i:s"), time() + (60 * 5), "/");

            header("Location: acao.php");
            exit;
        } else {    
            $erro = "Login ou Senha Incorretos!";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <br>
    <form action="" method="POST">
        <label for="usuario">Usúario:</label>
        <input type="text" name="usuario" id="usuario" required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br><br>

        <input type="submit" value="Enviar">
        <?php if(isset($erro)) echo "<p style='color:red;'>$erro</p>"; ?>
    </form>
</body>
</html>