<?php

$root = dirname(__DIR__);
chdir($root);

$out = $root.'/out';
if (! is_dir($out)) {
    mkdir($out, 0755, true);
}

$pages = [
    'index.php' => 'index.html',
    'bet-of-the-day.php' => 'bet-of-the-day.html',
    'about.php' => 'about.html',
    'terms.php' => 'terms.html',
    'privacy.php' => 'privacy.html',
];

$repl = [
    'href="index.php"' => 'href="index.html"',
    'href="bet-of-the-day.php"' => 'href="bet-of-the-day.html"',
    'href="about.php"' => 'href="about.html"',
    'href="terms.php"' => 'href="terms.html"',
    'href="privacy.php"' => 'href="privacy.html"',
];

foreach ($pages as $src => $dest) {
    ob_start();
    include $root.'/'.$src;
    $html = strtr(ob_get_clean(), $repl);
    file_put_contents($out.'/'.$dest, $html);
    echo "Wrote out/{$dest}\n";
}

removeDir($out.'/assets');
removeDir($out.'/dist');
copyDir($root.'/assets', $out.'/assets');
if (is_dir($root.'/dist')) {
    copyDir($root.'/dist', $out.'/dist');
}

echo "Static export ready in out/\n";

function copyDir(string $src, string $dst): void
{
    if (! is_dir($src)) {
        return;
    }

    if (! is_dir($dst)) {
        mkdir($dst, 0755, true);
    }

    $items = scandir($src) ?: [];
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        $from = $src.'/'.$item;
        $to = $dst.'/'.$item;
        if (is_dir($from)) {
            copyDir($from, $to);
            continue;
        }
        copy($from, $to);
    }
}

function removeDir(string $dir): void
{
    if (! is_dir($dir)) {
        return;
    }

    $items = scandir($dir) ?: [];
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        $path = $dir.'/'.$item;
        if (is_dir($path)) {
            removeDir($path);
            continue;
        }
        unlink($path);
    }

    rmdir($dir);
}
