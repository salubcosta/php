<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brincando Com Forms</title>
</head>
<body>
    <form method="GET">
        <p>
            <label for="frmNome">Nome:</label>
            <input type="text" name="nome" id="frmNome">
        </p>
        
        <p>
            <label for="frmIdade">Idade:</label>
            <input type="number" name="idade" id="frmIdade">
        </p>

        <p>
            <label for="frmEmail">E-mail:</label>
            <input type="mail" name="email" id="frmEmail">
        </p>

        <input type="submit" value="Enviar">
    </form>


    <?php
        # Uma forma de verificar
        if(isset($_GET['nome'])){
            # echo $_GET['nome']; # comentei apenas para testar a outra forma
        }

        # Outra forma de verificar
        if(filter_input(INPUT_GET, 'nome')){
            echo filter_input(INPUT_GET, 'nome');
        }
        /**
         * Caso utilize o formulário como POST, poderei utilizar:
         * $_POST['NOMEDOINPUT']
         * filter_input('INPUT_POST)
         */

         # Validando uma informação de formulário. Ex: e-mail
         if(filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL)){
             echo "E-mail válido!";
         } else {
             echo "E-mail inválido!";
         }

         /**
          * Há um filtro interessante: filter_input(INPUT_GET, 'nomeInput', FILTER_SANITIZE_SPECIAL_CHARS)
          * Esse filter_sanitize_special_chars faz com que comandos dentro de input se transformem em texto não executável,
          * Então, caso alguém queira informar tags html dentro do input, ou js dentro dos inputs, será convertido para txt
          * Exemplo de filtros:
          1 - FILTER_VALIDATE_EMAIL
          2 - FILTER_VALIDATE_INT
          3 - FILTER_VALIDATE_FLOAT
          4 - FILTER_VALIDATE_IP
          5 - FILTER_VALIDATE_URL

          1 - FILTER_SANITIZE_EMAIL
          2 - FILTER_SANITIZE_STRING
          3 - FILTER_SANITIZE_SPECIAL_CHARS
          4 - FILTER_SANITIZE_URL
          5 - FILTER_SANITIZE_NUMBER_FLOAT

          */
    ?>
</body>
</html>