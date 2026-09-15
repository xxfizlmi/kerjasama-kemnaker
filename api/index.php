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

(new yii\web\Application($config))->run();