<?php
$itens = [
    ["href" => "https://x.com/salubcosta", "src" => "./img/twitter.png", "alt" => "Twitter Logo"],
    ["href" => "https://facebook.com/salubcosta", "src" => "./img/facebook.png", "alt" => "Facebook Logo"],
    ["href" => "https://linkedin.com/in/salumao", "src" => "./img/linkedin.png", "alt" => "Linkedin Logo"],
    ["href" => "#", "src" => "./img/youtube.png", "alt" => "Youtube Logo"],
];
?>
<!-- Hero -->
<section class="flex gap-x-3">
    <!-- Título e Descrição -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Oi, meu nome é Salumão</h1>
        <p class="text-xl leading-6 mt-6">
            Falando um pouco sobre mim, Atualmente trabalho como
            Analista de Tecnologia da Informação e utilizo diariamente
            SGBS como Oracle, DB2 e MS SQL Server. Também estou
            alocado em projetos com Python e desempenho a função de
            Engenheiro de Qualidade.
        </p>
        <!-- Links -->
        <ul class="flex gap-x-3 mt-3">
            <?php foreach ($itens as $item): ?>
                <li><a href="<?= $item["href"] ?>" target="_blank">
                        <img class="h-8 hover:animate-bounce" src="<?= $item["src"] ?>" alt="<?= $item["alt"] ?>">
                    </a></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Imagem -->
    <div class="w-1/3 flex items-center justify-center">
        <div>
            <img class="h-60 -mt-4 hover:animate-pulse" src="./img/avatar.svg" alt="Salumão">
        </div>
    </div>
</section>