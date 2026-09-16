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

    Yii::setAlias('@webroot', $root . '/web');
    Yii::setAlias('@web', '');

    $config = require $root . '/config/web.php';


    $config['runtimePath'] = '/tmp/yii-runtime';
    $config['components']['request']['baseUrl'] = '';

    $config['components']['assetManager']['bundles'][\yii\web\YiiAsset::class] = false;
    $config['components']['assetManager']['bundles'][\yii\web\JqueryAsset::class] = false;
    $config['components']['assetManager']['bundles'][\yii\bootstrap5\BootstrapAsset::class] = false;
    $config['components']['assetManager']['bundles'][\yii\bootstrap5\BootstrapPluginAsset::class] = false;

    (new yii\web\Application($config))->run();
} catch (\Throwable $e) {
    http_response_code(500);
    header('Content-Type: text/plain; charset=UTF-8');

    echo get_class($e) . PHP_EOL;
    echo $e->getMessage() . PHP_EOL . PHP_EOL;
    echo $e->getTraceAsString();
}
