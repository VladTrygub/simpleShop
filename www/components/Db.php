<?php

class Db {
  
  private static $logger;
  
  public static function getConnection() {
    self::$logger = Logger::getLogger(__CLASS__);

    $paramsPath = ROOT . '/configs/db_params.php';
    self::$logger->debug(" :: \$paramsPath :: $paramsPath");
    $params = include($paramsPath);
    self::$logger->debug(' :: $params :: ' . implode(", ", $params));
    $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
    $db = new PDO($dsn, $params['user'], $params['password']);
    self::$logger->debug(" :: isset(\$db) :: " . isset($db) . " \n");

    return $db;
  }
  
}

?>