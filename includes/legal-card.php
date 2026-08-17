<section class="loy-card flex flex-col gap-10 p-[15px] desktop:p-10">
    <div class="flex flex-col gap-5">
        <h1 class="text-xl font-medium text-white desktop:text-2xl">
            <?= htmlspecialchars($legal['title'], ENT_QUOTES, 'UTF-8') ?>
        </h1>
        <div class="loy-prose text-base leading-7 text-loy-text desktop:text-lg">
            <?php if (! empty($legal['date'])): ?>
                <p class="text-loy-muted"><?= htmlspecialchars($legal['date'], ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif; ?>

            <?php foreach ($legal['blocks'] as $block): ?>
                <?php if (($block['type'] ?? '') === 'heading'): ?>
                    <p class="font-bold"><?= htmlspecialchars($block['text'], ENT_QUOTES, 'UTF-8') ?></p>
                <?php elseif (($block['type'] ?? '') === 'list'): ?>
                    <ul>
                        <?php foreach ($block['items'] as $item): ?>
                            <li><?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php elseif (($block['type'] ?? '') === 'olist'): ?>
                    <ol>
                        <?php foreach ($block['items'] as $item): ?>
                            <li><?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?></li>
                        <?php endforeach; ?>
                    </ol>
                <?php else: ?>
                    <p><?= htmlspecialchars($block['text'], ENT_QUOTES, 'UTF-8') ?></p>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
