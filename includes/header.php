<?php
$currentPage = $currentPage ?? 'home';
?>
<header class="relative z-20 border-b border-loy-line bg-loy-glass backdrop-blur-[21.6px]">
    <div class="mx-auto flex max-w-loy items-stretch justify-between px-[15px] desktop:px-[100px]">
        <a href="index.php" class="flex items-center py-5">
            <span class="block h-[41px] w-[162px] shrink-0 desktop:h-[59px] desktop:w-[235px]">
                <img src="assets/images/logo.png" alt="SoccerLoy" class="h-full w-full object-contain object-left">
            </span>
        </a>
        <nav class="hidden items-stretch desktop:flex" aria-label="Main">
            <?php foreach ($navItems as $item): ?>
                <a
                    href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>"
                    class="flex items-center px-5 text-[17px] text-white transition duration-75 hover:bg-white/5 <?= $currentPage === $item['key'] ? 'bg-white/5 font-medium' : 'font-normal' ?>"
                >
                    <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </div>
</header>

<nav class="relative z-10 px-2.5 pt-5 desktop:hidden" aria-label="Mobile">
    <div class="flex h-[43px] overflow-hidden rounded-[9.66px] border border-loy-line bg-loy-ink">
        <?php foreach ($navItems as $index => $item): ?>
            <a
                href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>"
                class="flex flex-1 items-center justify-center px-3 text-sm font-medium transition duration-75 hover:bg-white/5 <?= $index > 0 ? 'border-l border-loy-line' : '' ?> <?= $currentPage === $item['key'] ? 'bg-white/5 text-white' : 'text-loy-text' ?>"
            >
                <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
            </a>
        <?php endforeach; ?>
    </div>
</nav>
