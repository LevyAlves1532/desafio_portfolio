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
            <section style="background-image: url(./assets/images/bg-hero.png);" class="py-[120px] bg-cover bg-center bg-no-repeat">
                <div class="max-w-[1040px] mx-auto px-5 flex flex-col items-center">
                    <img src="./assets/images/hero.png" alt="Profile Hero" class="p-1 border-2 border-red-400 rounded-full mb-[56px]">

                    <p class="text-xl font-medium text-gray-500 mb-[8px] font-inconsolata">Hello World! Meu nome é <span class="font-bold text-red-300 font-inconsolata">Martina Santos</span> e sou</p>
                    <h1 class="text-[56px] font-bold text-gray-100 mb-5 font-maven">Desenvolvedora PHP</h1>

                    <p class="max-w-[680px] text-center text-sm text-gray-300 mb-[80px]">Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</p>

                    <div class="flex gap-[12px]">
                        <span class="py-[4px] px-[12px] rounded-full bg-green-400 font-inconsolata font-medium">PHP</span>
                        <span class="py-[4px] px-[12px] rounded-full bg-green-400 font-inconsolata font-medium">Laravel</span>
                        <span class="py-[4px] px-[12px] rounded-full bg-green-400 font-inconsolata font-medium">Node</span>
                        <span class="py-[4px] px-[12px] rounded-full bg-green-400 font-inconsolata font-medium">Filament</span>
                        <span class="py-[4px] px-[12px] rounded-full bg-green-400 font-inconsolata font-medium">Knex</span>
                        <span class="py-[4px] px-[12px] rounded-full bg-green-400 font-inconsolata font-medium">Fastify</span>
                        <span class="py-[4px] px-[12px] rounded-full bg-green-400 font-inconsolata font-medium">Git</span>
                        <span class="py-[4px] px-[12px] rounded-full bg-green-400 font-inconsolata font-medium">MySQL</span>
                    </div>
                </div>
            </section>

            <!-- Projects Section -->
            <section class="">
                <p class=""></p>
                <h2 class=""></h2>

                <div class="">
                    <div class="">
                        <div class="">
                            <img src="" alt="" class="">
                        </div>

                        <div class="">
                            <div class="">
                                <p class=""></p>
                                <p class=""></p>
                            </div>

                            <div class="">
                                <span class=""></span>
                            </div>
                        </div>
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