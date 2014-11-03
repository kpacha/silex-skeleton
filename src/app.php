<?php

$app = new \Silex\Application;

if (getenv('APPLICATION_ENV') == 'development') {
    require_once __DIR__ . '/../resources/config/dev.php';
} else {
    require_once __DIR__ . '/../resources/config/prod.php';
}

$app->register(new \Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../resources/views',
));

return $app;