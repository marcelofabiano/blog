<?php

require __DIR__.'/vendor/autoload.php';

$settings = require __DIR__.'/config/app.php';

$app = new \Slim\App($settings);

require __DIR__.'/app/routes.php';

$app->run();

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
