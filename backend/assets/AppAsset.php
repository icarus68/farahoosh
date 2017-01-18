<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/bootstrap-rtl.min.css',
        'css/metisMenu.min.css',
        'css/main.min.css',
        'font-awesome/css/font-awesome.min.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/metisMenu.min.js',
        'js/main.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
