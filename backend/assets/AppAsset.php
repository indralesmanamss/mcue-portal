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
        'css/animate.css/animate.css',
        'css/font-awesome/css/font-awesome.min.css',
        'css/simple-line-icons/css/simple-line-icons.css',
        'css/bootstrap/dist/css/bootstrap.css',
        'css/font.css',
        'css/app.css',
        'css/custom.css'
    ];
    public $js = [
        'js/bootstrap/dist/js/bootstrap.js',
        'js/ui-load.js',
        'js/ui-jp.config.js',
        'js/ui-jp.js',
        'js/ui-nav.js',
        'js/ui-toggle.js',
        'js/ui-client.js',
        'https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js',
        'js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
