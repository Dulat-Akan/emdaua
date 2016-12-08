<?php


$params = require(__DIR__ . '/params.php');
$config = [
    'defaultRoute' => 'site/index',
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
        /*'@bar' => 'http://www.example.com',*/
    ],
     /*'catchAll' => ['site/offline'],*/
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
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

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '2eIQjW7Seks8cZ2n412KlxSCO5qzKgDA',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',   /*ukazivaet na model User v kataloge models*/
            'enableAutoLogin' => true,
            'loginUrl' => ['user/default/login'],
          
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
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
            'rules' => [
            ],
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
    $config['modules']['debug']['allowedIPs'] = ['192.168.*'];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}


/*if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}*/

return $config;
