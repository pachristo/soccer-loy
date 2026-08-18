<?php
$picks = $card['picks'] ?? [];
?>
<div class="flex flex-col items-center gap-[7px] desktop:gap-2">
    <div class="flex flex-col items-center gap-0.5 text-center">
        <p class="text-[12px] text-loy-orange desktop:text-[15px]">Prediction:</p>
        <p class="text-[15px] font-semibold text-loy-text desktop:text-[15px]">
            <?= htmlspecialchars($card['prediction'], ENT_QUOTES, 'UTF-8') ?>
        </p>
    </div>
    <div class="flex h-[39px] w-[339px] max-w-full overflow-hidden rounded-[9px] border border-loy-line desktop:h-[61px] desktop:w-[530px] desktop:rounded-[14px]">
        <?php foreach ($markets as $index => $market): ?>
            <?php $isPick = in_array($market, $picks, true); ?>
            <span class="tip-cell <?= $index === 0 ? '!border-l-0' : '' ?> <?= $isPick ? 'is-pick' : '' ?>">
                <span class="tip-label"><?= htmlspecialchars($market, ENT_QUOTES, 'UTF-8') ?></span>
            </span>
        <?php endforeach; ?>
    </div>
</div>


