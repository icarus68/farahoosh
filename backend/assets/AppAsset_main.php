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
        'css/sb-admin.css',
        'css/sb-admin-rtl.css',
        'css/plugins/morris.css',
        'font-awesome/css/font-awesome.min.css',
        'css/master.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/plugins/morris/raphael.min.js',
        'js/plugins/morris/morris.min.js',
        'js/plugins/morris/morris-data.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
