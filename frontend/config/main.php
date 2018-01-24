<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
<<<<<<< HEAD
<<<<<<< HEAD
       'session' => [
            // this is the name of the session cookie used for login on the frontend
           'name' => 'advanced-frontend',
=======
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
=======
       'session' => [
            // this is the name of the session cookie used for login on the frontend
           'name' => 'advanced-frontend',
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'modules' => [
        'user' => [
            // following line will restrict access to admin controller from frontend application
            'as frontend' => 'dektrium\user\filters\FrontendFilter',
        ],
<<<<<<< HEAD
=======
/*
        'urlManager' => [
           'class' => 'yii\web\UrlManager',
            'baseUrl'=>'/e-region/',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
               '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',

            ],
        ],*/
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
=======
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
    ],
    'params' => $params,
];
