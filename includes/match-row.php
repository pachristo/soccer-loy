<?php
$picks = $match['picks'] ?? [];
$checks = $match['checks'] ?? [];
$league = $match['league'] ?? 'chmp';
?>
<a href="#" class="block w-full min-w-0 border-b border-t border-loy-line bg-loy-row transition duration-75 hover:bg-loy-ink">
    <div class="desktop:hidden">
        <div class="flex min-w-0 items-center gap-1.5 px-1.5 py-1.5">
            <span class="relative size-5 shrink-0 overflow-hidden rounded bg-white">
                <img
                    src="assets/images/leagues/<?= htmlspecialchars($league, ENT_QUOTES, 'UTF-8') ?>-v2.png"
                    alt=""
                    class="absolute left-1/2 top-1/2 size-3.5 -translate-x-1/2 -translate-y-1/2 object-contain"
                >
            </span>
            <div class="flex min-w-0 flex-1 items-center justify-center gap-0.5">
                <p class="min-w-0 flex-1 truncate text-right text-[11px] tracking-[0.15px] text-loy-text">
                    <?= htmlspecialchars($match['home'], ENT_QUOTES, 'UTF-8') ?>
                </p>
                <img src="assets/icons/dash-v2.svg" alt="" class="size-3.5 shrink-0">
                <p class="min-w-0 flex-1 truncate text-left text-[11px] tracking-[0.15px] text-loy-text">
                    <?= htmlspecialchars($match['away'], ENT_QUOTES, 'UTF-8') ?>
                </p>
            </div>
        </div>
        <div class="flex min-w-0 border-t border-loy-line">
            <?php foreach ($markets as $index => $market): ?>
                <?php
                $isPick = in_array($market, $picks, true);
                $hasCheck = in_array($market, $checks, true);
                ?>
                <span class="tip-cell <?= $index === 0 ? '!border-l-0' : '' ?> <?= $isPick ? 'is-pick' : '' ?>">
                    <span class="tip-label"><?= htmlspecialchars($market, ENT_QUOTES, 'UTF-8') ?></span>
                    <?php if ($hasCheck): ?>
                        <img src="assets/icons/check-v2.svg" alt="" class="ml-0.5 size-3 shrink-0">
                    <?php endif; ?>
                </span>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="hidden items-stretch desktop:flex desktop:h-[61px]">
        <div class="flex items-center px-[15px] py-2.5">
            <span class="relative size-6 overflow-hidden rounded bg-white">
                <img
                    src="assets/images/leagues/<?= htmlspecialchars($league, ENT_QUOTES, 'UTF-8') ?>-v2.png"
                    alt=""
                    class="absolute left-1/2 top-1/2 size-[18px] -translate-x-1/2 -translate-y-1/2 object-contain"
                >
            </span>
        </div>

        <div class="min-w-0 flex-1 border-l border-loy-line">
            <div class="flex h-[61px] items-center justify-center gap-[5px] px-2.5">
                <p class="min-w-0 flex-1 truncate text-right text-base tracking-[0.2px] text-loy-text">
                    <?= htmlspecialchars($match['home'], ENT_QUOTES, 'UTF-8') ?>
                </p>
                <img src="assets/icons/dash-v2.svg" alt="" class="size-6 shrink-0">
                <p class="min-w-0 flex-1 truncate text-left text-base tracking-[0.2px] text-loy-text">
                    <?= htmlspecialchars($match['away'], ENT_QUOTES, 'UTF-8') ?>
                </p>
            </div>
        </div>

        <div class="h-[61px] w-[530px] shrink-0">
            <div class="flex h-full">
                <?php foreach ($markets as $market): ?>
                    <?php
                    $isPick = in_array($market, $picks, true);
                    $hasCheck = in_array($market, $checks, true);
                    ?>
                    <span class="tip-cell <?= $isPick ? 'is-pick' : '' ?>">
                        <span class="tip-label"><?= htmlspecialchars($market, ENT_QUOTES, 'UTF-8') ?></span>
                        <?php if ($hasCheck): ?>
                            <img src="assets/icons/check-v2.svg" alt="" class="size-6 shrink-0">
                        <?php endif; ?>
                    </span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</a>
