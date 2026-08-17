<?php
$currentPage = 'about';
$pageTitle = 'SoccerLoy — About Us';

require __DIR__ . '/data/site.php';
require __DIR__ . '/data/legal.php';
$legal = $legalPages['about'];

require __DIR__ . '/includes/layout-start.php';
require __DIR__ . '/includes/header.php';
?>

<main class="relative z-10">
    <section class="loy-pad">
        <div class="mx-auto max-w-loy">
            <?php include __DIR__ . '/includes/legal-card.php'; ?>
        </div>
    </section>

    <?php include __DIR__ . '/includes/site-bottom.php'; ?>
</main>

<?php require __DIR__ . '/includes/layout-end.php'; ?>
