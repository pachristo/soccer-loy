<aside class="w-full overflow-hidden rounded-[15px] border border-loy-line desktop:sticky desktop:top-10 desktop:w-[271px] desktop:shrink-0">
    <div class="flex h-8 items-center bg-loy-ink px-[15px] desktop:h-[67px]">
        <h2 class="text-sm font-medium tracking-[0.2px] text-loy-text desktop:text-base">Partners &amp; Links</h2>
    </div>
    <div class="bg-loy-row">
        <?php foreach ($partners as $partner): ?>
            <a
                href="<?= htmlspecialchars($partner['url'], ENT_QUOTES, 'UTF-8') ?>"
                class="flex h-12 items-center border-b border-t border-loy-line px-[15px] text-sm tracking-[0.2px] text-loy-text transition duration-75 hover:bg-loy-ink desktop:h-[49px] desktop:text-[15px]"
            >
                <?= htmlspecialchars($partner['label'], ENT_QUOTES, 'UTF-8') ?>
            </a>
        <?php endforeach; ?>
    </div>
</aside>
