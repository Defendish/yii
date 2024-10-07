<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900',
        "https://fonts.googleapis.com/css?family=Roboto:400,500,700,900",
        "css/bootstrap.css",
        "css/font-awesome.min.css",
        "css/owl.carousel.min.css",
        "css/owl.theme.default.min.css",
        "style.css",
        "responsive.css",
    ];
    public $js = [
        'js/jquery-3.1.1.min.js',
        'js/bootstrap.min.js',
        'js/owl.carousel.min.js',
        'js/active.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap5\BootstrapAsset'
    ];
}
