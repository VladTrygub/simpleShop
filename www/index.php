<?php

include("log4php/Logger.php");

Logger::configure('configs/config.xml');

$log = Logger::getLogger('myLogger');