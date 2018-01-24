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
        'css/site.css',
    ];
    public $js = [
<<<<<<< HEAD
        'js/map.js'
=======
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
<<<<<<< HEAD
<<<<<<< HEAD


=======
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
=======
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
}
