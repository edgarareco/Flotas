<?php


require 'config/paths.php';
require 'config/database.php';
require 'config/constants.php';


spl_autoload_register(function($class) {
    require LIBS . $class . ".php";
});

// Use an authloader !
//require 'libs/Bootstrap.php';
//require 'libs/Controller.php';
//require 'libs/Model.php';
//require 'libs/View.php';
//Library
//require 'libs/Database.php';
//require 'libs/Session.php';
//require 'libs/Hash.php';

$app = new Bootstrap();
?> 