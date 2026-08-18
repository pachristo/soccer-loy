<?php
$currentPage = $currentPage ?? 'home';
$pageTitle = $pageTitle ?? 'SoccerLoy — Free Soccer Predictions';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app-v9.css">
    <link rel="icon" href="assets/images/favicon-v2.png">
</head>
<body>
<div class="loy-shell">
