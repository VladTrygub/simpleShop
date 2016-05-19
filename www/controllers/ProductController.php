<?php

include_once ROOT . '/models/Products.php';

class ProductController {

  public function actionList() {
    $productsList = Products::getProductsList();
    require_once(ROOT . '/views/product/index.php');
    return true;
  }

  public function actionCategory($categoryName) {
    $productsList = Products::getProductsListByCategory($categoryName);
    require_once(ROOT . "/views/product/byCategory.php");
    return true;
  }
  
}

?>