<?php
    $projects = [
        [
            'image' => './assets/images/projects/travelgram.png',
            'title' => 'Travelgram',
            'description' => 'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo',
            'stacks' => [$stacks[0], $stacks[1], $stacks[6], $stacks[7]],
        ],
        [
            'image' => './assets/images/projects/pagina_receita.png',
            'title' => 'Página de receita',
            'description' => 'Página com o passo a passo de uma receita para cupcakes',
            'stacks' => [$stacks[2], $stacks[4], $stacks[5], $stacks[6], $stacks[7]],
        ],
        [
            'image' => './assets/images/projects/tech_news.png',
            'title' => 'Tech News',
            'description' => 'Homepage de um portal de notícias sobre a área de tecnologia',
            'stacks' => [$stacks[0], $stacks[1], $stacks[3], $stacks[6], $stacks[7]],
        ],
        [
            'image' => './assets/images/projects/refund.png',
            'title' => 'Refund',
            'description' => 'Um sistema para pedido e acompanhamento de reembolso ',
            'stacks' => [$stacks[0], $stacks[6], $stacks[7]],
        ],
        [
            'image' => './assets/images/projects/pagina_de_turismo.png',
            'title' => 'Página de turismo',
            'description' => 'Página com as principais informações para quem quer viajar para Busan',
            'stacks' => [$stacks[0], $stacks[1], $stacks[6], $stacks[7]],
        ],
        [
            'image' => './assets/images/projects/zingen.png',
            'title' => 'Zingen',
            'description' => 'Landing Page completa e responsiva de um aplicativo de Karaokê',
            'stacks' => [$stacks[2], $stacks[4], $stacks[5], $stacks[6], $stacks[7]],
        ],
    ];
?>

<?php foreach ($projects as $project): ?>
    <div class="p-[12px] rounded-[12px] bg-[#292C34] flex gap-[16px] border-2 border-[#292C34] hover:border-[#878EA1] transition-all">
        <div class="w-2/5">
            <img src="<?= $project['image'] ?>" alt="" class="">
        </div>

        <div class="flex-1 flex flex-col">
            <div class="flex-1">
                <p class="text-[16px] font-maven text-white font-bold mb-[8px]"><?= $project['title'] ?></p>
                <p class="text-[14px] text-gray-200"><?= $project['description'] ?></p>
            </div>

            <div class="flex gap-[8px]">
                <?php foreach ($project['stacks'] as $stack): ?>
                    <span class="py-[2px] px-[8px] text-[12px] rounded-full bg-<?= $stack['color'] ?>-400 font-inconsolata font-medium uppercase"><?= $stack['stack'] ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>
