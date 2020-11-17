<?php

session_start();



//require 'core/BaseModel.php';
//require 'controllers/HomeController.php';
//require 'controllers/ContactController.php';
//require 'controllers/AboutController.php';
//require 'controllers/VideosController.php';
//require 'controllers/AccountController.php';
//require 'controllers/CategoryController.php';

require 'core/Router.php';

require 'vendor/autoload.php';


$router = new Router();
require 'core/routes.php';
$uri = trim($_SERVER['REQUEST_URI'], '/');
$uri = explode('?',$uri)[0];

$router->direct($uri);








