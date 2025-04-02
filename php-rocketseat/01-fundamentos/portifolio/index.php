<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu portifolio</title>
</head>
<body>
    <?php 
        $nome = "Salumão";
        $saudação = "Oi";
        $titulo = $saudação . " Portifolio do " . $nome;
        $subtitulo = "Seja bem vindo ao meu portifolio!";
        $ano = date("Y");
        
        $projeto = "Meu Portifolio";
        $finalizado = true;
        $dataProjeto = date("d-m-Y");
        $descricao = "Meu primeiro portifolio. Escrito em PHP e HTML";

        $projetos = [
            [
                "titulo" => "Meu Portifolio",
                "finalizado" => false,
                "dataProjeto" => date("d-m-Y"),
                "descricao" => "Meu primeiro portifolio. Escrito em PHP e HTML"
            ],
            [
                "titulo" => "Lista de Tarefas",
                "finalizado" => true,
                "dataProjeto" => date("d-m-Y"),
                "descricao" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum ex fuga nihil facilis quisquam. Dicta reprehenderit officiis quae, commodi minima maiores autem corporis asperiores ipsam, exercitationem earum. Voluptatem, alias sint."
            ]
        ];
    ?>
    <h1><?=$titulo?></h1>
    <p><?=$subtitulo?></p>
    <h1><?=$ano?></h1>

    <hr>

    <?php foreach($projetos as $projeto): ?>
        <div>
            <h2><?=$projeto["titulo"]?></h2>
            <p><?=$projeto["descricao"] ?></p>
            <div>
                <p><?=$projeto["dataProjeto"]?></p>
            </div>
            <div>
                <?php if ($projeto["finalizado"]): ?>
                    <p>✅</p>
                <?php else: ?>
                    <p>⛔</p>
                <?php endif; ?>
            </div>
        </div> 
    <?php endforeach; ?>
</body>
</html>