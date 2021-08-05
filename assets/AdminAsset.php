<?php

namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/admin/web';

    public $css = [
        'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800',
        'css/font-awesome/css/font-awesome.min.css',
        'css/animate.css',
        'css/jquery.fancybox.min.css',
        'css/style.css',
        'css/style-admin.css',
        ];
    public $js = [
//        'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
//        'js/bootstrap.min.js',
//        'js/scripts.js',
        'js/jquery.cookie.js', // подключаем скрипт для работы с куками для версии для слабовидящих
        'js/version-seers.js',// версия для слабовидящих
        'js/jquery.fancybox.min.js',// галерея--><!-- fancyBox JS -->
//      'js/bootstrapValidator.min.js'// Валидация формы-->
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',];
}