<?php

class Products {
  
  private static $logger;

  public static function getProductsList() {
    self::$logger = Logger::getLogger(__CLASS__);

    $db = Db::getConnection();

    $productsList = array();

    // todo: show only one record, do for all
    $result = $db->query(
      'SELECT product_id, `name`, `count`, `category_id` FROM products LIMIT 5'
    );
    $result->setFetchMode(PDO::FETCH_ASSOC);

    return $result->fetch();
  }

  public static function getProductsListByCategory($categoryName) {
    self::$logger = Logger::getLogger(__CLASS__);
    self::$logger->debug(" :: \$categoryName :: $categoryName \n");
    
    $db = Db::getConnection();

    $productsList = array();

    $categoryId = $db->query(
      'SELECT category_id FROM categories WHERE `name`=' . $categoryName
    );
    
    self::$logger->debug(" :: \$categoryId->fetchColumn() :: {$categoryId->fetchColumn()} \n");

    $result = $db->query(
      'SELECT product_id, `name`, `count`
FROM products
WHERE product_id=' . $categoryId
    );
  }

  public static function getProductById($id) {
    $db = Db::getConnection();
  }

  public static function saveProduct($product) {
    $db = Db::getConnection();
  }

  public static function updateProduct($product) {
    $db = Db::getConnection();
  }

  public static function deleteProduct($product) {
    $db = Db::getConnection();
  }

}

?>