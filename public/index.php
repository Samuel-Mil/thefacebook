<?php

// Display all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Autoload classes (PSR4)
require __DIR__.'/../vendor/autoload.php';

// Application setup
$app = new App\Core\Application();
$app->run();
