<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu portfolio</title>
</head>
<body>
    <?php 
        $nome = "Salumão";
        $saudação = "Oi";
        $titulo = $saudação . " Portfolio do " . $nome;
        $subtitulo = "Seja bem vindo ao meu portfolio!";
        $ano = date("Y");
        
        $projeto = "Meu portfolio";
        $finalizado = true;
        $dataProjeto = date("d-m-Y");
        $descricao = "Meu primeiro portfolio. Escrito em PHP e HTML";

        $projetos = [
            [
                "titulo" => "Meu portfolio",
                "finalizado" => true,
                "ano" => date("Y"),
                "descricao" => "Meu primeiro portfolio. Escrito em PHP e HTML",
                "stack" => ["PHP", "HTML", "CSS", "JS"]
            ],
            [
                "titulo" => "Lista de Tarefas",
                "finalizado" => false,
                "ano" => date("Y"),
                "descricao" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum ex fuga nihil facilis quisquam. Dicta reprehenderit officiis quae, commodi minima maiores autem corporis asperiores ipsam, exercitationem earum. Voluptatem, alias sint."
            ],
            [
                "titulo" => "Controle de Leitura de Livros",
                "finalizado" => false,
                "ano" => date("Y")-1,
                "descricao" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum ex fuga nihil facilis quisquam. Dicta reprehenderit officiis quae, commodi minima maiores autem corporis asperiores ipsam, exercitationem earum. Voluptatem, alias sint."
            ]
        ];

        function verificarSeEstaFinalizado($projeto){
            if ($projeto["finalizado"]):
                return '<p>✅ Finalizado.</p>';
            endif;
                return '<p>⛔ Não Finalizado...</p>';
        }

        function filtro($itens, $funcao){  
            $filtrados = [];

            foreach($itens as $item):
                if($funcao($item)):
                    $filtrados[] = $item;
                endif;
            endforeach;
            return $filtrados;
        };

        /*
        Tudo isso pode ser substituído pelo array_filter
        $projetosFiltrados = filtro($projetos, function($obj){
            return $obj['ano'] <= 2025;
        });*/
        
        $projetosFiltrados = array_filter($projetos, function($projeto){
            return $projeto['ano']<= 2025;
        });

    ?>
    <h1><?=$titulo?></h1>
    <p><?=$subtitulo?></p>
    <h1><?=$ano?></h1>

    <hr>

    <?php foreach($projetosFiltrados as $projeto): ?>
        <div>
            <h2><?=$projeto["titulo"]?></h2>
            <p><?=$projeto["descricao"] ?></p>
            <div>
                <p><?=$projeto["ano"]?></p>
            </div>
            <div>
                <?=verificarSeEstaFinalizado($projeto)?>
            </div>
        </div> 
    <?php endforeach; ?>
</body>
</html>