<?php
$showSeo = $showSeo ?? false;
$showPartnersMobile = $showPartnersMobile ?? false;
?>
<section class="loy-pad flex flex-col gap-10">
    <?php if ($showSeo): ?>
        <?php include __DIR__ . '/seo.php'; ?>
    <?php endif; ?>

    <?php if ($showPartnersMobile): ?>
        <div class="desktop:hidden">
            <?php include __DIR__ . '/partners.php'; ?>
        </div>
    <?php endif; ?>

    <?php include __DIR__ . '/footer.php'; ?>
</section>
