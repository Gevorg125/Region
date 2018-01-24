<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'mdm' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'class' => 'mdm\admin\Module',
=======
            'class' => 'mdm\admin\Module'
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
=======
            'class' => 'mdm\admin\Module',
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
        ],
        'user' => [
            'class' => 'dektrium\user\Module',
            'as backend' => 'dektrium\user\filters\BackendFilter',
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
            'controllers' => ['profile', 'recovery', 'registration', 'settings'], // not allowed controller in 'backend'
            'enableUnconfirmedLogin' => true,
            'confirmWithin' => 21600,
            'cost' => 12,
            'admins' => ['admin'],
            // Override Model Yii2-user

<<<<<<< HEAD
=======
           // 'controllers' => ['profile', 'recovery', 'settings'], // not allowed controller in 'backend'
            'enableUnconfirmedLogin' => true,
            'confirmWithin' => 21600,
            'cost' => 12,
            'admins' => ['child'],
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
=======
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
            'modelMap' => [

                'Account' => 'backend\models\Account',

                'LoginForm' => 'backend\models\LoginForm',

                'Profile' => 'backend\models\Profile',

                'RecoveryForm' => 'backend\models\RecoveryForm',

                'RegistrationForm' => 'backend\models\RegistrationForm',

                'ResendForm' => 'backend\models\ResendForm',

                'SettingsForm' => 'backend\models\SettingsForm',

                'Token' => 'backend\models\Token',

                'User' => 'backend\models\User',

                'UserSearch' => 'backend\models\UserSearch',

            ],

            // Overide Controller Yii2-user

            'controllerMap' => [

                'profile' => 'backend\controllers\user\ProfileController',

                'recovery' => 'backend\controllers\user\RecoveryController',

                'registration' => 'backend\controllers\user\RegistrationController',

                'security' => 'backend\controllers\user\SecurityController',

                'settings' => 'backend\controllers\user\SettingsController',

                'admin' => 'backend\controllers\user\AdminController',


            ],
        ],
    ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => [
                'guest'
            ]
        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        /*
            'urlManager' => [
                'class' => 'yii\web\UrlManager',
                'enablePrettyUrl' => true,
                'baseUrl' => 'http://localhost/backend/web',
                'showScriptName' => false,
                'enablePrettyUrl' => true,
                'rules' => [
                    '<controller:\w+>/<id:\d+>' => '<controller>/view',
                    '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                    '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                ],

            ],*/
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views' => '@app/views/user',
                ],
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-purple',
                ],
            ],
        ],
      /*  'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],*/
<<<<<<< HEAD
=======

    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
//        'user' => [
//            'identityClass' => 'common\models\User',
//            'enableAutoLogin' => true,
//            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
//        ],
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
=======
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
//        'session' => [
//            // this is the name of the session cookie used for login on the backend
//            'name' => 'advanced-backend',
//        ],
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

    ],
    'as access' => [
          'class' => 'mdm\admin\components\AccessControl',
<<<<<<< HEAD
=======
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views' => '@app/views/user',
                ],
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-black',
                ],
            ],
        ],

//        'urlManager' => [
//            'class' => 'yii\web\UrlManager',
//            'baseUrl'=>'/e-region/backend/web/',
//            'enablePrettyUrl' => true,
//            'showScriptName' => false,
//            'rules' => [
//            ],
//        ],

    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
=======
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
        'allowActions' => [
            'site/*',
            'admin/*',
            '/user/admin/*',
            'gii/*',
            'debug/*',
//            'user/security/login',
//            'user/registration/register',
//            'user/registration/resend',
//            'user/recovery/request',
<<<<<<< HEAD
<<<<<<< HEAD
        ],
    ],
    'params' => $params,
];
=======
        ]
    ],
    'params' => $params,
];
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
=======
        ],
    ],
    'params' => $params,
];
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
