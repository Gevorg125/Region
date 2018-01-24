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
        'css/site.css',
<<<<<<< HEAD
<<<<<<< HEAD
        'css/skins/skin-black.css',
=======
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
=======
        'css/skins/skin-black.css',
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
