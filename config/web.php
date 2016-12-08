<?php


<<<<<<< HEAD

=======
>>>>>>> 2baab5e5cc186f1f6e8c16739e25e491ff7fb079
$params = require(__DIR__ . '/params.php');

$config = [
<<<<<<< HEAD


    
       'aliases' => [
        '@status' =>'/casino/basic/img/',
        '@img' => '/casino/basic/img/',
        '@jquery' => '/casino/basic/js/',
        '@base' => '/casino/basic/web/index.php',
        '@control' => '/casino/basic/web/index.php/site',
        '@myfile' => '/casino/basic/views/site/myfile/myfile.html',
        '@files' => '../views/site/',
        '@basepath' => '/casino/basic/web/',
        '@style' => '/casino/basic/web/',
        '@site' => '/casino/basic/web/index.php/site',

=======
    'defaultRoute' => 'site/index',
'aliases' => [
	    '@status' =>'/img/',
        '@img' => '/img/',
        '@jquery' => '/js/',
        '@base' => '/web/index.php',
        '@control' => '/web/index.php/site',
        '@myfile' => '/views/site/myfile/myfile.html',
        '@files' => '../views/site/',
        '@basepath' => '/web/',
		'@style' => '/web/',
		'@site' => '/web/index.php/site',
>>>>>>> 2baab5e5cc186f1f6e8c16739e25e491ff7fb079
        /*'@bar' => 'http://www.example.com',*/
    ],

    'defaultRoute' => 'site/index',
    
    

    

    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
<<<<<<< HEAD
=======
	 'language' => 'ru',
    'components' => [

        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],

        'formatter' => [
             'class' => 'yii\i18n\Formatter',
             'dateFormat' => 'php:d.m.Y',
             'datetimeFormat' => 'php:d.m.Y H:i:s',
             'timeFormat' => 'php:H:i:s',
                    ],
>>>>>>> 2baab5e5cc186f1f6e8c16739e25e491ff7fb079

    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'uhugugyftdrsdrsreseadsaweaewa',
            
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => '',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => require(__DIR__ . '/db.php'),
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //'enableStrictParsing' => true,
            'rules' => [
                [

                    'pattern' => '<controller>/<action>',
                    'route' => '<controller>/<action>',
                    'suffix' => '',


                    ],
                        [

                            'pattern' => '<module>/<controller>/<action>',
                            'route' => '<controller>/<action>',
                            'suffix' => '',

                        ],

                            [

                                'pattern' => '<controller>/<action>/<id:d+>',
                                'route' => '<controller>/<action>',
                                'suffix' => '',

                            ],

                                    [

                                        'pattern' => '<module><controller>/<action>/<id:d+>',
                                        'route' => '<controller>/<action>',
                                        'suffix' => '',

                                    ],

                                        [

                                            'pattern' => '',
                                            'route' => 'main/index',
                                            'suffix' => '',

                                        ],
                                            [

                                                'pattern' => 'найти-<search:\w*>',
                                                'route' => 'main/search',
                                                'suffix' => '',

                                            ],
            
            ],
        ],
        
    ],

    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],

    ],
    
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;