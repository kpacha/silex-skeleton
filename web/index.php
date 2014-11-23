<?php

require_once __DIR__ . '/../vendor/autoload.php';

$env = getenv('APPLICATION_ENV');
$app = require_once __DIR__ . '/../src/app.php';
require_once __DIR__ . '/../src/routes.php';

$app->run();
