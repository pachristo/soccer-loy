<footer class="relative flex flex-col items-center gap-[30px] px-2.5 py-[30px] text-sm desktop:px-0 desktop:text-base">
    <div class="relative flex w-full max-w-[378px] items-center gap-3.5">
        <p class="shrink-0 text-loy-dim">Choose Language</p>
        <button
            type="button"
            data-lang-toggle
            class="flex flex-1 items-center justify-between rounded-[10px] bg-loy-line px-[15px] py-2.5 text-left text-white"
        >
            <span data-lang-label>English</span>
            <img src="assets/icons/chevron-down-v2.svg" alt="" class="size-6">
        </button>
        <div data-lang-menu class="absolute left-[132px] right-0 top-[52px] z-30 hidden overflow-hidden rounded-[10px] border border-loy-line bg-loy-ink">
            <?php foreach ($languages as $language): ?>
                <button
                    type="button"
                    data-lang="<?= htmlspecialchars($language, ENT_QUOTES, 'UTF-8') ?>"
                    class="block w-full px-[15px] py-3.5 text-left text-white hover:bg-loy-line"
                >
                    <?= htmlspecialchars($language, ENT_QUOTES, 'UTF-8') ?>
                </button>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="flex flex-col items-center gap-5">
        <div class="flex flex-wrap items-center justify-center gap-[15px] text-loy-text">
            <?php foreach ($footerLinks as $index => $link): ?>
                <?php if ($index > 0): ?>
                    <span class="h-5 w-px bg-loy-line" aria-hidden="true"></span>
                <?php endif; ?>
                <a href="<?= htmlspecialchars($link['href'], ENT_QUOTES, 'UTF-8') ?>" class="transition duration-75 hover:text-loy-orange">
                    <?= htmlspecialchars($link['label'], ENT_QUOTES, 'UTF-8') ?>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="flex flex-col items-center gap-5">
            <div class="flex items-center justify-center gap-2.5">
                <p class="leading-5 text-loy-text">Follow Us on:</p>
                <a href="#" aria-label="Facebook" class="size-6 overflow-hidden">
                    <img src="assets/icons/facebook-v2.svg" alt="" class="size-6">
                </a>
                <a href="#" aria-label="Telegram" class="size-6 overflow-hidden">
                    <img src="assets/icons/telegram-v2.svg" alt="" class="size-6">
                </a>
            </div>
            <p class="text-center leading-5 text-loy-text">
                Contact Us:
                <a href="mailto:info@soccerloy.com" class="text-loy-orange underline">info@soccerloy.com</a>
            </p>
        </div>
    </div>

    <div class="flex w-full items-end justify-between border-t border-white/10 pt-5 leading-5 text-white">
        <p>Gamble Responsibly 18+</p>
        <p>© 2026 Soccerloy</p>
    </div>
</footer>
