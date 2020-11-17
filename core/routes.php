<?php

$router->define(
    [
        'GET' => [
            // Home pagina [waarde 1]
            '' => [
                'controller' => 'HomeController',
                'method' => 'index',
                'authenticated' => false,
                'adminOnly' => false
            ],

            // About pagina  [waarde 2]
            'about' => [
                // About pagina de controller waarde [Waarde 1]
                'controller' => 'AboutController',
                // About pagina de method waarde [Waarde 2]
                'method' => 'index',
                'authenticated' => false,
                'adminOnly' => false
            ],

            // Categorie pagina  [waarde 3]
            'categorie' => [
                // categorie pagina de controller waarde [Waarde 1]
                'controller' => 'CategoryController',
                // video pagina de method waarde [Waarde 2]
                'method' => 'getCategoryData',
                'authenticated' => false,
                'adminOnly' => false
            ],

            // Contact pagina  [waarde 4]
            'contact' => [
                'controller' => 'ContactController',
                'method' => 'index',
                'authenticated' => false,
                'adminOnly' => false
            ],

            //upload pagina
            'upload' => [
                'controller' => 'VideosController',
                'method' => 'upload',
                'authenticated' => true,
                'adminOnly' => true
            ],

            // Login Pagina [waarde 5]
            'login' => [
                'controller' => 'AccountController',
                'method' => 'login',
                'authenticated' => false,
                'adminOnly' => false
            ],

            //registratie pagina
            'register' => [
                'controller' => 'AccountController',
                'method' => 'register',
                'authenticated' => false,
                'adminOnly' => false
            ],

            //video lijst pagina
            'videos' => [
                'controller' => 'VideosController',
                'method' => 'getVideoData',
                'authenticated' => true,
                'adminOnly' => false
            ],

            'playvideo' => [
                'controller' => 'VideosController',
                'method' => 'getVideoId',
                'authenticated' => true,
                'adminOnly' => false
            ],

            'search' => [
                'controller' => 'VideosController',
                'method' => 'searchVideo',
                'authenticated' => true,
                'adminOnly' => false
            ],

            'Profiel' => [
                'controller' => 'AccountController',
                'method' => 'profiel',
                'authenticated' => true,
                'adminOnly' => false
            ],

            'passChange' => [
                'controller' => 'AccountController',
                'method' => 'passChange',
                'authenticated' => true,
                'adminOnly' => false
            ],

            'nameChange' => [
                'controller' => 'AccountController',
                'method' => 'nameChange',
                'authenticated' => true,
                'adminOnly' => false
            ]
        ],
        'POST' => [
            // Contact pagina  [waarde 4]
            'sendcontact' => [
                'controller' => 'ContactController',
                'method' => 'mailContactForm',
                'authenticated' => false,
                'adminOnly' => false
            ],

            //upload functie
            'uploadVideo' => [
                'controller' => 'VideosController',
                'method' => 'uploadVideo',
                'authenticated' => true,
                'adminOnly' => true
            ],

            // doLogin functie [waarde 6]
            'doLogin' => [
                'controller' => 'AccountController',
                'method' => 'doLogin',
                'authenticated' => false,
                'adminOnly' => false
            ],

            //doLogout functie
            'doLogout' => [
                'controller' => 'AccountController',
                'method' => 'doLogout',
                'authenticated' => true,
                'adminOnly' => false
            ],

            //registratie functie
            'doRegister' => [
                'controller' => 'AccountController',
                'method' => 'doRegister',
                'authenticated' => false,
                'adminOnly' => false
            ],

            'doComment' => [
                'controller' => 'CommentsController',
                'method' => 'doComment',
                'authenticated' => true,
                'adminOnly' => false
            ],

            'doDeleteVideo' => [
                'controller' => 'VideosController',
                'method' => 'doDeleteVideo',
                'authenticated' => true,
                'adminOnly' => true
            ],

            'doDelete' => [
                'controller' => 'AccountController',
                'method' => 'deleteaccount',
                'authenticated' => true,
                'adminOnly' => false
            ],

            'wijzignaam' => [
                'controller' => 'AccountController',
                'method' => 'wijzignaam',
                'authenticated' => true,
                'adminOnly' => false
            ],

            'wijzigpass' => [
                'controller' => 'AccountController',
                'method' => 'wijzigpass',
                'authenticated' => true,
                'adminOnly' => false
            ],

            'doSubscribe' => [
                'controller' => 'NewsletterController',
                'method' => 'subscribe',
                'authenticated' => false,
                'adminOnly' => false
            ],

            'Video/likes/increment' => [
                'controller' => 'LikesController',
                'method' => 'increment',
                'authenticated' => true,
                'adminOnly' => false
            ],

            'Video/likes/decrement' => [
                'controller' => 'LikesController',
                'method' => 'decrement',
                'authenticated' => true,
                'adminOnly' => false
            ]
        ]
    ]


);
