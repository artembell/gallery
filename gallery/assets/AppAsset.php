<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        "css/animate.css",
        "css/icomoon.css",
        "css/magnific-popup.css",
        "css/salvattore.css",
        "css/style.css",
    ];
    public $js = [

        "js/jquery.min.js",
        "js/jquery.easing.1.3.js",
        "js/bootstrap.min.js",
        "js/jquery.waypoints.min.js",
        "js/jquery.magnific-popup.min.js",
        "js/salvattore.min.js",
        "js/main.js",
        "js/modernizr-2.6.2.min.js",
        "js/respond.min.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
