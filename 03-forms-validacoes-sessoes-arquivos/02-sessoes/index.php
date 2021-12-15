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
    <title>Acesso Restrito</title>
</head>
<body>
    <?php if($_SESSION['OK']): ?>
        <p>
            Olá! você está acessando uma área restrita!
        </p>
    <?php else: ?>
        <p>
            Área Restrita. Favor, efetuar login
        </p>
    <?php endif; ?>
    <p>
        <?php if(!$_SESSION['OK']):?>
            <a href="/03-forms-validacoes-sessoes-arquivos/02-sessoes/login.php">Logar</a>
        <?php endif;?>
        <?php if($_SESSION['OK']):?>
            <a href="/03-forms-validacoes-sessoes-arquivos/02-sessoes/?sair=1">Sair</a>
        <?php endif;?>
    </p>

    <?php
        if($_GET['sair'] == 1 ){
            session_destroy();
            unset( $_SESSION );
            $_SESSION['aviso'];
            header("location: login.php");
        }
        if($_GET['login'] == 1 ){
            header("location: login.php");
        }
    ?>
</body>
</html>