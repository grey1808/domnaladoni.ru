<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
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
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700&display=swap&subset=cyrillic',
        'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800,900&display=swap&subset=cyrillic',
        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'css/font-awesome.css',
        'css/bootstrap.css',
        'css/jquery.fancybox.css',
        'css/lightgallery.min.css',
        'css/style.css',
        'css/fotorama/fotorama.min.css',
    ];
    public $js = [
        'js/jquery-3.2.1.min.js',
        'js/lightgallery-all.min.js',
        'js/jquery.fancybox.js',
        'js/slick.min.js',
        'js/jquery.inputmask.js',
        'js/jquery.mousewheel.js',
        'js/modernizr.js',
        'js/scripts.js',
        'js/main.js',
    ];
//    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapPluginAsset',
//    ];
}
