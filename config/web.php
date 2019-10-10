<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'lJDwkkzLw2H7hi3V0Zd6zMqySFUFxYy6',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
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
            // 'transport' => [
            //     'class' => 'Swift_SmtpTransport',
            //     'host' => 'mail.adm.tools',
            //     'username' => 'info@studyway.com.ua',
            //     'password' => 'iO0onKKhtjR6',
            //     'port' => '25',
            //     'encryption' => 'ssl',
            // ],
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
        'db' => $db,
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'visa/usa' => 'site/usa',
                'contact' => 'site/contact',
                'thanks' => 'site/thanks',

                'blog/<alias>' => 'blog/view',
                'blog/' => 'blog/index',

                'program/<alias>/page/<page:\d>' => 'course/view',
                'program/<alias>' => 'course/view',
                'program/' => 'course/index',
                'programs/<alias>' => 'program/view',

                'university/<alias>/page/<page:\d>' => 'category/view',
                'university/<alias>' => 'category/view',
                'university/' => 'category/index',
                'universities/<alias>' => 'university/view',
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
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
