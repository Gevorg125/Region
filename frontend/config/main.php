<?php
$params = array_merge(

    require(__DIR__ . '/../../common/config/params.php'),

    require(__DIR__ . '/../../common/config/params-local.php'),

    require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')

);
return [
    'id' => 'app-frontend',
    'name' => 'e-region',
//    'homeUrl' => '/', // hosting config

    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'hy',
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [

        // Yii2-user configuration frontend



    ],
    'components' => [


        'urlManager' => [

//            'class' => '\frontend\components\MyUrlManager',

            'class' => 'yii\web\UrlManager',

            'enablePrettyUrl' => true,

            'showScriptName' => false,

            'rules' => [
                'locality/<route>' => 'locality/index',

                'category/<route>' => 'category/index',

                '<controller:\w+>/<id:\d+>' => '<controller>/view',

                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',

                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',

            ],

        ],


        'session' => [
            'name' => 'FRONTENDSESSID',

            'cookieParams' => [

                'httpOnly' => true,

                'path' => 'http://e-region.tk/',

            ],

        ],

        'view' => [

            'theme' => [

                'pathMap' => [

                    '@dektrium/user/views' => '@app/views/user',

                ],

            ],

        ],

        'log' => [

            'traceLevel' => YII_DEBUG ? 3 : 0,

            'targets' => [

                [

                    'class' => 'yii\log\FileTarget',

                    'levels' => ['error', 'warning'],

                ],

            ],

        ],

        'errorHandler' => [

            'errorAction' => 'site/error',

        ],

    ],
    'as beforeRequest' => [
        'class' => '\frontend\components\CheckLang'
    ],
    'params' => $params,
];



