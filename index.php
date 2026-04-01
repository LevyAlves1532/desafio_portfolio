<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio Portfolio Dev</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">

        <!-- Tailwind CSS -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

        <style>
            * {
                font-family: 'Asap', sans-serif;
            }

            .font-maven {
                font-family: 'Maven Pro', sans-serif;
            }

            .font-inconsolata {
                font-family: 'Inconsolata', monospace;
            }

            .font-asap {
                font-family: 'Asap', sans-serif;
            }
        </style>
    </head>
    <body class="bg-[#16181D]">
        <main class="">
            <!-- Hero Section -->
            <?php require('./components/hero.php'); ?>

            <!-- Projects Section -->
            <section class="pt-[72px] pb-[144px]">
                <div class="max-w-[1040px] w-full mx-auto px-5">
                    <div class="text-center mb-[56px]">
                        <p class="text-[20px] font-inconsolata text-red-300 mb-[8px]">Meu trabalho</p>
                        <h2 class="text-[24px] font-maven text-white font-bold">Veja os projetos em destaque</h2>
                    </div>

                    <div class="grid grid-cols-2 gap-[24px]">
                        <?php require('./components/projects.php'); ?>
                    </div>
                </div>
            </section>

            <!-- Social Links Section -->
            <section class="">
                <p class=""></p>
                <h3 class=""></h3>
                <p class=""></p>

                <div class="">
                    <a href="#" class="">
                        <img src="" alt="" class="">
                        <p class=""></p>
                        <img src="" alt="" class="">
                    </a>
                </div>
            </section>
        </main>
    </body>
</html>