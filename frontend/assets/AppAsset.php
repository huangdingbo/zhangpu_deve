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
       'css/bootstrap.css',
        'css/font-awesome.min.css',
        'css/cm-overlay.css',
        'css/style.css',

    ];
    public $js = [
        'js/query.min.js',
//        'js/jquery-2.1.4.min.js',
        'js/jquery.tools.min.js',
        'js/jquery.mobile.custom.min.js',
        'js/jquery.cm-overlay.js',
        'js/SmoothScroll.min.js',
        'js/move-top.js',
        'js/easing.js',
        'js/bootstrap.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
