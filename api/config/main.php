<?php

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php'),
    // require(__DIR__ . '/../../common/config/bootstrap.php'),
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),    
    'bootstrap' => ['log'],
    'modules' => [
        'v1' => [
            'basePath' => '@app/modules/v1',
            'class' => 'api\modules\v1\Module'
        ]
    ],
    'components' => [        
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule', 
                    'controller' => 'v1/country',
                    'tokens' => [
                        '{id}' => '<id:\\w+>'
                    ],
                    'class' => 'yii\rest\UrlRule', 
                    'controller' => 'v1/users',
                    'tokens' => [
                        '{id}' => '<id:\\w+>'
                    ],
                    'extraPatterns' => [
                        'POST signup'       =>  'signup',
                        // 'POST login'        =>  'login',
                        'GET index'         =>  'index',
                        'GET view'         =>   'view',
                        'DELETE delete'    =>   'delete',
                        // 'PUT update'       =>   'update',
		                // 'OPTIONS {id}'      =>  'options',
		                // 'OPTIONS login'     =>  'options',		                
		                'OPTIONS signup'    =>  'options',
		                // 'POST confirm'      =>  'confirm',
		                // 'OPTIONS confirm'   =>  'options',
		                // 'GET me'            =>  'me',
		                // 'POST me'           =>  'me-update',
		                // 'OPTIONS me'        =>  'options',
	                ],
                    
                ]
            ],        
        ]
    ],
    'params' => $params,
];



