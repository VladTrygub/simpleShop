<?php

include("log4php/Logger.php");
Logger::configure('configs/config.xml');
$logger = Logger::getLogger('myLogger');

define('ROOT', dirname(__FILE__));

require_once(ROOT . '/components/Router.php');
require_once(ROOT . '/components/Db.php');

$router = new Router();
$router->run();
//$logger->info(md5('user_pass2'));
$logger->info("\n\n===========================================================================================================\n");