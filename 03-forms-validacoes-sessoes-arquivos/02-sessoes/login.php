<?php
/**
 * Trabalhando com sessions
 */
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <p>
            <label for="frmEmail">E-mail *</label>
            <input type="email" name="email" id="frmEmail">
        </p>

        <p>
            <label for="frmSenha">Senha *</label>
            <input type="password" name="senha" id="frmSenha">
        </p>

        <input type="submit" value="Acessar">
    </form>

    <?php
        if(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) && filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING)){
            $_SESSION['OK'] = true;
            $_SESSION['aviso'] = null;
            header("Location: index.php");
        } else {
            echo "* Informar e-mail e senha";
        }
    ?>
</body>
</html>