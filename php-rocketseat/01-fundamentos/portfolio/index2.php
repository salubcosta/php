<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfolio</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-900 text-gray-200">
    
    <?php include('./components/header.php') ?>

    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
        
        <?php include('./components/hero.php') ?>
    
        <!-- Lista de Projetos -->
        <section class="space-y-3 py-6" id="projetos">
            <!-- Projeto -->
            <h2 class="text-2xl font-bold">Meus Projetos</h2>

            <?php include('./components/projetos.php') ?>

        </section>
    </main>

    <footer class="mx-auto max-w-screen-lg min-h-20 px-3 h-20">
        <!-- Data -->
        <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">
            &copy; Copyright <?=date("Y")?>. Construído com 💙 por mim mesmo :) .
        </div>
        <!-- Links -->
         <div></div>
    </footer>
</body>
</html>