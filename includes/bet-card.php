<?php
$picks = $card['picks'] ?? [];
?>
<article class="overflow-hidden rounded-[10px] border border-loy-line bg-loy-row transition duration-75 hover:border-white/20 desktop:rounded-[15px]">
    <div class="flex h-[43px] items-center justify-between bg-loy-ink px-[13px] desktop:h-[67px] desktop:px-5">
        <p class="text-[13px] font-semibold tracking-[0.13px] text-loy-text desktop:text-xl desktop:tracking-[0.2px]">
            <?= htmlspecialchars($card['date'], ENT_QUOTES, 'UTF-8') ?>
        </p>
        <p class="text-[13px] font-semibold tracking-[0.13px] text-loy-text desktop:text-xl desktop:tracking-[0.2px]">
            <?= htmlspecialchars($card['league'], ENT_QUOTES, 'UTF-8') ?>
        </p>
    </div>

    <div class="flex flex-col items-center pb-[26px] pt-[13px] desktop:pb-10 desktop:pt-5">
        <p class="px-1 py-1 text-center text-xs font-medium tracking-[0.11px] text-loy-text desktop:hidden">
            <?= htmlspecialchars($card['home'] . '  -  ' . $card['away'], ENT_QUOTES, 'UTF-8') ?>
        </p>
        <div class="hidden w-full items-center gap-[5px] py-2.5 desktop:flex">
            <p class="min-w-0 flex-1 truncate text-right text-xl tracking-[0.2px] text-loy-text">
                <?= htmlspecialchars($card['home'], ENT_QUOTES, 'UTF-8') ?>
            </p>
            <img src="assets/icons/dash-v2.svg" alt="" class="size-6 shrink-0">
            <p class="min-w-0 flex-1 truncate text-left text-xl tracking-[0.2px] text-loy-text">
                <?= htmlspecialchars($card['away'], ENT_QUOTES, 'UTF-8') ?>
            </p>
        </div>

        <div class="flex w-full items-center justify-center gap-[7px] desktop:gap-2.5">
            <div class="flex w-[170px] flex-col items-center gap-0.5 desktop:w-[264px] desktop:gap-[3px]">
                <div class="relative size-[76px] overflow-hidden desktop:size-[118px]">
                    <img
                        src="assets/images/teams/<?= htmlspecialchars($card['home_logo'], ENT_QUOTES, 'UTF-8') ?>"
                        alt="<?= htmlspecialchars($card['home'], ENT_QUOTES, 'UTF-8') ?>"
                        class="absolute inset-0 size-full object-contain"
                    >
                </div>
                <p class="text-[13px] font-semibold tracking-[0.07px] text-loy-text desktop:text-xl desktop:tracking-[0.1px]">
                    <?= htmlspecialchars($card['home'], ENT_QUOTES, 'UTF-8') ?>
                </p>
            </div>

            <div class="hidden flex-col items-center gap-2 desktop:flex">
                <?php include __DIR__ . '/bet-prediction.php'; ?>
            </div>

            <div class="flex w-[170px] flex-col items-center gap-0.5 desktop:w-[264px] desktop:gap-[3px]">
                <div class="relative size-[76px] overflow-hidden desktop:size-[118px]">
                    <img
                        src="assets/images/teams/<?= htmlspecialchars($card['away_logo'], ENT_QUOTES, 'UTF-8') ?>"
                        alt="<?= htmlspecialchars($card['away'], ENT_QUOTES, 'UTF-8') ?>"
                        class="absolute inset-0 size-full object-contain"
                    >
                </div>
                <p class="text-center text-[13px] font-semibold tracking-[0.07px] text-loy-text desktop:text-xl desktop:tracking-[0.1px]">
                    <?= htmlspecialchars($card['away'], ENT_QUOTES, 'UTF-8') ?>
                </p>
            </div>
        </div>

        <div class="mt-1.5 flex flex-col items-center gap-[7px] desktop:hidden">
            <?php include __DIR__ . '/bet-prediction.php'; ?>
        </div>
    </div>
</article>
