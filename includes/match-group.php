<div class="loy-table">
    <div class="loy-date">
        <?= htmlspecialchars($group['date'], ENT_QUOTES, 'UTF-8') ?>
    </div>
    <div class="flex flex-col">
        <?php foreach ($group['matches'] as $match): ?>
            <?php include __DIR__ . '/match-row.php'; ?>
        <?php endforeach; ?>
    </div>
</div>
