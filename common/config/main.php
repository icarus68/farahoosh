<?php
return [
    
    'language' => 'fa_ir',
    'timezone' => 'Asia/Tehran',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'session' => [
            'timeout' => 86400,
         ],
        'user'=> [
                // enable cookie-based authentication
                'enableAutoLogin'=>true, 
                'authTimeout' => 7200,
                'loginUrl'=>array('site/login'),
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler'=> [
            // use 'site/error' action to display errors
            'errorAction'=>'site/error',
         ],
        
    ],
];
