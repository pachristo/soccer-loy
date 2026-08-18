<?php
$currentPage = 'home';
$pageTitle = 'SoccerLoy — Free Soccer Predictions, Football Accumulator Predictions';

require __DIR__ . '/data/home.php';
require __DIR__ . '/includes/layout-start.php';
require __DIR__ . '/includes/header.php';
?>

<main class="relative z-10">
    <section class="loy-pad">
        <div class="mx-auto flex max-w-loy flex-col gap-5 desktop:flex-row desktop:items-start desktop:gap-20">
            <div class="loy-card flex min-w-0 flex-1 flex-col gap-5 px-2 py-5 min-[400px]:px-[15px] desktop:p-[30px]">
                <h1 class="text-xl font-medium text-loy-text desktop:text-2xl">
                    Free Soccer Predictions, Football Accumulator Predictions
                </h1>
                <div class="flex flex-col gap-5">
                    <?php foreach ($fixtureGroups as $group): ?>
                        <?php include __DIR__ . '/includes/match-group.php'; ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="hidden self-stretch desktop:block">
                <?php include __DIR__ . '/includes/partners.php'; ?>
            </div>
        </div>
    </section>

    <?php
    $showSeo = true;
    $showPartnersMobile = true;
    include __DIR__ . '/includes/site-bottom.php';
    ?>
</main>

<?php require __DIR__ . '/includes/layout-end.php'; ?>
