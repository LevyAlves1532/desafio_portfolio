<?php
    $stacks = [
        ['stack' => 'php', 'color' => 'indigo'],
        ['stack' => 'Laravel', 'color' => 'red'],
        ['stack' => 'Node', 'color' => 'green'],
        ['stack' => 'Filament', 'color' => 'amber'],
        ['stack' => 'Knex', 'color' => 'rose'],
        ['stack' => 'Fastify', 'color' => 'gray'],
        ['stack' => 'Git', 'color' => 'orange'],
        ['stack' => 'MySQL', 'color' => 'blue'],
    ];
?>

<section style="background-image: url(./assets/images/bg-hero.png);" class="py-[120px] bg-cover bg-center bg-no-repeat">
    <div class="max-w-[1040px] mx-auto px-5 flex flex-col items-center max-md:text-center">
        <img src="./assets/images/hero.png" alt="Profile Hero" class="p-1 border-2 border-red-400 rounded-full mb-[56px]">

        <p class="text-xl font-medium text-gray-500 mb-[8px] font-inconsolata">Hello World! Meu nome é <span class="font-bold text-red-300 font-inconsolata">Martina Santos</span> e sou</p>
        <h1 class="text-[56px] font-bold text-gray-100 mb-5 font-maven max-md:text-[36px]">Desenvolvedora PHP</h1>

        <p class="max-w-[680px] text-center text-sm text-gray-300 mb-[80px]">Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</p>

        <div class="flex gap-[12px] max-md:flex-wrap max-md:justify-center">
            <?php foreach ($stacks as $stack): ?>
                <span class="py-[4px] px-[12px] rounded-full bg-<?= $stack['color'] ?>-400 font-inconsolata font-medium uppercase"><?= $stack['stack'] ?></span>
            <?php endforeach; ?>
        </div>
    </div>
</section>
