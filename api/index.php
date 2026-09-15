<?php

declare(strict_types=1);

defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');

$root = dirname(__DIR__);

require $root . '/vendor/autoload.php';
require $root . '/vendor/yiisoft/yii2/Yii.php';

$config = require $root . '/config/web.php';

$config['runtimePath'] = '/tmp/yii-runtime';
$config['components']['request']['baseUrl'] = '';

try {
    (new yii\web\Application($config))->run();
} catch (\Throwable $e) {
    error_log(
        get_class($e) . ': ' .
            $e->getMessage() . PHP_EOL .
            $e->getTraceAsString()
    );

    http_response_code(500);
    echo 'Internal Server Error';
}
