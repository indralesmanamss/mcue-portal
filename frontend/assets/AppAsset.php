<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/jquery.bxslider.css',
        'css/owl.carousel.css',
        'css/fullcalendar.css',
        'css/typo.css',
        'css/font-awesome.min.css',
        'css/ihover.css',
        'css/widget.css',
        'css/style.css',
        'css/jquery.sidr.dark.css',
        'css/prettyPhoto.css',
        'css/responsive.css',
        'css/color.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/jquery.bxslider.js',
        'js/owl.carousel.min.js',
        'js/jquery-filterable.js',
        'js/waypoints-min.js',
        'js/moment.min.js',
        'js/fullcalendar.min.js',
        'js/jquery.downCount.js',
        'js/ie.js',
        'js/jquery.accordion.js',
        'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false',
        'js/jquery.sidr.min.js',
        'js/jquery.prettyPhoto.js',
        'js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
