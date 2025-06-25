<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use Viniciuscoutinh0\Minimal\Application;

$app = Application::make(dirname(__DIR__, 1));
$app->boot();

$app->view('welcome')->name('welcome');
