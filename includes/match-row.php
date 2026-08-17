<?php
$picks = $match['picks'] ?? [];
$checks = $match['checks'] ?? [];
$league = $match['league'] ?? 'chmp';
?>
<a href="#" class="block w-full border-b border-t border-loy-line bg-loy-row transition duration-75 hover:bg-loy-ink">
    <div class="flex items-stretch desktop:h-[61px]">
        <div class="flex items-center px-2.5 py-[7px] desktop:px-[15px] desktop:py-2.5">
            <span class="relative size-6 overflow-hidden rounded bg-white">
                <img
                    src="assets/images/leagues/<?= htmlspecialchars($league, ENT_QUOTES, 'UTF-8') ?>.png"
                    alt=""
                    class="absolute left-1/2 top-1/2 size-[18px] -translate-x-1/2 -translate-y-1/2 object-contain"
                >
            </span>
        </div>

        <div class="min-w-0 flex-1 border-l border-loy-line">
            <div class="flex items-center justify-center gap-1 px-2.5 py-2.5 desktop:h-[61px] desktop:gap-[5px] desktop:py-0">
                <p class="min-w-0 flex-1 truncate text-right text-xs tracking-[0.15px] text-loy-text desktop:text-[17px] desktop:tracking-[0.2px]">
                    <?= htmlspecialchars($match['home'], ENT_QUOTES, 'UTF-8') ?>
                </p>
                <img src="assets/icons/dash.svg" alt="" class="size-[18px] shrink-0 desktop:size-6">
                <p class="min-w-0 flex-1 truncate text-left text-xs tracking-[0.15px] text-loy-text desktop:text-[17px] desktop:tracking-[0.2px]">
                    <?= htmlspecialchars($match['away'], ENT_QUOTES, 'UTF-8') ?>
                </p>
            </div>

            <div class="flex border-t border-loy-line desktop:hidden">
                <?php foreach ($markets as $market): ?>
                    <?php
                    $isPick = in_array($market, $picks, true);
                    $hasCheck = in_array($market, $checks, true);
                    ?>
                    <span class="tip-cell <?= $isPick ? 'is-pick' : '' ?>">
                        <span class="tip-label"><?= htmlspecialchars($market, ENT_QUOTES, 'UTF-8') ?></span>
                        <?php if ($hasCheck): ?>
                            <img src="assets/icons/check.svg" alt="" class="ml-0.5 size-[11px] shrink-0">
                        <?php endif; ?>
                    </span>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="hidden h-[61px] w-[530px] shrink-0 desktop:flex">
            <?php foreach ($markets as $market): ?>
                <?php
                $isPick = in_array($market, $picks, true);
                $hasCheck = in_array($market, $checks, true);
                ?>
                <span class="tip-cell <?= $isPick ? 'is-pick' : '' ?>">
                    <span class="tip-label"><?= htmlspecialchars($market, ENT_QUOTES, 'UTF-8') ?></span>
                    <?php if ($hasCheck): ?>
                        <img src="assets/icons/check.svg" alt="" class="size-6 shrink-0">
                    <?php endif; ?>
                </span>
            <?php endforeach; ?>
        </div>
    </div>
</a>
