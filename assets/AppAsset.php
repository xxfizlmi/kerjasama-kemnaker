<?php

declare(strict_types=1);

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class AppAsset extends AssetBundle
{
    public $basePath = '@app/web';
    public $baseUrl = '';

    public $css = [
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',
        'css/style.css',
    ];

    public $js = [
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        'js/script.js',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

    public $depends = [];
}
