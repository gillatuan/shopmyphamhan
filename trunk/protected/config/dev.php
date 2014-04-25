<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
require_once(dirname(__FILE__).'/../configSetting/params.php');

$lang = isset($_GET['lang']) && $_GET['lang'] == 'en' ? $_GET['lang'] : 'vi';

return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'My Web Application',
    'language' => $lang,

    // preloading 'log' component
    'preload'=>array('log'),

    // autoloading model and component classes
    'import'=>array(
        'application.models.*',
        'application.components.*',
        'application.extensions.*',
        'application.modules.SuperAdmin.models.Cache',
        'application.modules.SuperAdmin.models.Lookup',
        'application.modules.Admin.models.*',
    ),

    'modules'=>array(
        // uncomment the following to enable the Gii tool

        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'123',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters'=>array('127.0.0.1','::1'),
        ),
        'SuperAdmin' => array(),
        'Admin' => array(),
        'Shop' => array(),
    ),

    // application components
    'components'=>array(
        'request'=>array(
            'enableCookieValidation'=>true,
//            'enableCsrfValidation'=>true,
        ),
        'user'=>array(
            // enable cookie-based authentication
            'allowAutoLogin'=>true,
            'class'=>'WebUser',
        ),
        'authManager'=>array(
            'class'=>'CDbAuthManager',
            'connectionID'=>'db',
            'itemTable'=>'authitem',
            'itemChildTable'=>'authitemchild',
            'assignmentTable'=>'authassignment',
        ),
        // UserCounter
        'counter' => array(
            'class' => 'UserCounter',
        ),

        // uncomment the following to enable URLs in path-format
        'urlManager'=> array(
            'urlFormat'=>'path',
//            'urlSuffix'=>'.html',
            'showScriptName' => false,
            'rules'          => array(
                // backend
                // gii
                '/gii-controller'         => 'gii/controller',
                '/gii-crud'               => 'gii/crud',
                '/gii-module'             => 'gii/module',
                '/gii-model'              => 'gii/model',
                '/gii-login'              => 'gii/default/login',
                '/gii'                    => 'gii/default/index',
                '/tinyMce-compressor/'                                   => 'tinyMce/compressor',

                // Products
                '/shop/confirm'                                              => 'Shop/product/confirmOrder',
                '/shop/user-order'                                           => 'Shop/product/userOrder',
                '/shop/update-cart'                                          => 'Shop/product/updateOrDeleteCart',
                '/shop/cart'                                                 => 'Shop/product/viewCart',
                '/shop/<cateAlias:.*?>/<alias:.*?>'                          => 'Shop/product/view',
                '/shop/<cateAlias:.*?>_p<page:\d+>'                          => 'Shop/product/listProductsByCategory',
                '/shop/<cateAlias:.*?>'                                      => 'Shop/product/listProductsByCategory',
                '/tintuc-<newsAlias:.*?>'                                    => 'Shop/product/readNews',
                '/search'                                                    => 'Shop/product/search',
                '/faq'                                                       => 'Shop/product/faq',
                '/'                                                          => 'Shop/product/index',


                // front end
                '<action:\w+>'=>'site/<action>',
            ),
        ),


        // uncomment the following to use a MySQL database
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;port=3306;dbname=prj_shopphaideponline_com',
            'emulatePrepare'   => true,
            'username'         => 'root',
            'password'         => '',
            'charset'          => 'utf8',
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
                    'logFile'=>'application.log',
                    'levels'=>'error, warning',
                    'filter' => 'CLogFilter',
                ),
                array(
                    'class'=>'CFileLogRoute',
                    'logFile'=>'cron_trace.log',
                    'levels'=>'trace',
                    'filter' => 'CLogFilter',
                ),
                // uncomment the following to show log messages on web pages
                /*
                array(
                    'class'=>'CWebLogRoute',
                ),*/

            ),
        ),
        'cache'=>array(
            'class'=>'system.caching.CFileCache',
        ),
        'mail' => array(
            'class' => 'ext.yii-mail.YiiMail',
            'transportType' => 'smtp', // php
            'transportOptions' => array(
                'host'=>SMTP_HOST,
                'username'=>SMTP_USERNAME,
                'password'=>SMTP_PASSWORD,
                'port'=>SMTP_PORT,
                'encryption' => SMTP_SECURE,
            ),
            'logging' => true,
            'dryRun' => false
        ),
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params'=>require_once (dirname(__FILE__) . '/params.php'),
);
