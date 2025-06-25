<?php

declare(strict_types=1);

use Viniciuscoutinh0\Minimal\View;

require __DIR__.'/../bootstrap/app.php';

?>

<!DOCTYPE html>
<html lang="<?=str_replace('_', '-', $app->locale()); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= env('APP_NAME'); ?></title>
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css2?family=Geist:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <?= $app->vite()->asset('resources/js/app.js'); ?>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
</head>
<body class="antialiased text-base relative">
    <?= View::render('welcome'); ?>
</body>
</html>
