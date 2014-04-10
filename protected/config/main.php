<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Phil Ivey',
    'theme'=>'phil',
    'sourceLanguage' => 'en',
    'language' => 'ru',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'ext.imperavi-redactor-widget.ImperaviRedactorWidget',
	),

	'modules'=>array(
        'admin',
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'12345',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('192.168.10.11','::1'),
		),

	),

	// application components
	'components'=>array(
        'PagTour',
        'PagNews',

        'urlManager'=>array(
           'class'=>'UrlManager',
           'urlFormat'=>'path',
            'showScriptName'=>false,
            'rules'=>array(
                '<language:(ru|en)>' => 'site/index',
                '<language:(ru|en)>/<action:(contact|login|logout)>' => 'site/<action>',
                '<language:(ru|en)>/<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<language:(ru|en)>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<language:(ru|en)>/<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),

        ),


		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=phil',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
            'tablePrefix' => 'tbl_',
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
    'params'=>array(

    ),
);