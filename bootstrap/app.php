<?php

require __DIR__.'/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__.'/../');
$dotenv->load();

$settings = require __DIR__.'/../config/app.php';

$app = new \Slim\App($settings);

$container = $app->getContainer();

require __DIR__.'/../config/view.php';
require __DIR__.'/../app/routes.php';

$app->run();
