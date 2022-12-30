<?php

/*
 * Register the autoloader
 */
require __DIR__ . '/../vendor/autoload.php';

/*
 * Run the application
 */

$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->run();
