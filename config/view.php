<?php

$cache = [];
if (getenv('VIEW_CACHE', true) == 'true') {
    $cache = ['cache' => __DIR__.'/../bootstrap/cache'];
}

$container['view'] = function ($container) use ($cache) {

    $view = new \Slim\Views\Twig(__DIR__.'/../resources/views', $cache);
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
    return $view;
};
