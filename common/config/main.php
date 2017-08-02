<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/../vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
	'aliases' => [
		'@bower' => '@vendor/bower',
		'@npm'   => '@vendor/npm-asset',
	],
];
