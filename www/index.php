<?php

include("log4php/Logger.php");
Logger::configure('configs/config.xml');
//$logger = Logger::getLogger('myLogger');

define('ROOT', dirname(__FILE__));

require_once(ROOT . '/components/Router.php');

$router = new Router();
$router->run();