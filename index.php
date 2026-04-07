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
            <section style="background-image: url(./assets/images/bg-contacts.png);" class="pt-[128px] pb-[200px] bg-cover bg-center bg-no-repeat">
                <div class="max-w-[460px] w-full mx-auto px-5 text-center">
                    <p class="font-inconsolata mb-[8px] text-xl text-purple-400">Contato</p>
                    <h3 class="font-maven font-bold mb-[8px] text-2xl text-gray-100">Gostou do meu trabalho?</h3>
                    <p class="text-base text-gray-200 mb-[48px]">Entre em contato ou acompanhe as minhas redes sociais!</p>

                    <div class="flex flex-col px-[10px] gap-[16px]">
                        <?php require('./components/contacts.php') ?>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>