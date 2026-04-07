<?php 
    $contacts = [
        [
            'icon' => 'assets/images/contacts/linkedin-icon.png',
            'title' => 'Linkedin',
            'link' => '#',
        ],
        [
            'icon' => 'assets/images/contacts/instagram-icon.png',
            'title' => 'Instagram',
            'link' => '#',
        ],
        [
            'icon' => 'assets/images/contacts/github-icon.png',
            'title' => 'GitHub',
            'link' => '#',
        ],
        [
            'icon' => 'assets/images/contacts/email-icon.png',
            'title' => 'E-mail',
            'link' => '#',
        ],
    ];
?>

<?php foreach ($contacts as $contact): ?>
    <a href="<?= $contact['link'] ?>" class="flex gap-[12px] items-center p-5 bg-[#292C34] rounded-lg border-2 border-[#292C34] transition-all hover:border-blue-500">
        <img src="<?= $contact['icon'] ?>" alt="" class="w-[28px] h-[28px]">
        <p class="flex-1 text-left text-base text-gray-200 font-maven"><?= $contact['title'] ?></p>
        <img src="assets/images/arrow-up-right.png" alt="" class="w-[20px] h-[20px]">
    </a>
<?php endforeach; ?>
