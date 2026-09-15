<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '0');
ini_set('log_errors', '1');

register_shutdown_function(function () {
    $error = error_get_last();

    if ($error !== null) {
        error_log(
            'PHP SHUTDOWN ERROR: ' .
                $error['message'] .
                ' in ' .
                $error['file'] .
                ':' .
                $error['line']
        );
    }
});

try {
    defined('YII_DEBUG') or define('YII_DEBUG', false);
    defined('YII_ENV') or define('YII_ENV', 'prod');

    $root = dirname(__DIR__);

    require $root . '/vendor/autoload.php';
    require $root . '/vendor/yiisoft/yii2/Yii.php';

    $config = require $root . '/config/web.php';

    $config['runtimePath'] = '/tmp/yii-runtime';
    $config['components']['request']['baseUrl'] = '';

    (new yii\web\Application($config))->run();
} catch (\Throwable $e) {
    error_log('YII ERROR: ' . get_class($e));
    error_log('MESSAGE: ' . $e->getMessage());
    error_log('FILE: ' . $e->getFile() . ':' . $e->getLine());
    error_log('TRACE: ' . $e->getTraceAsString());

    http_response_code(500);
    echo 'Internal Server Error';
}
