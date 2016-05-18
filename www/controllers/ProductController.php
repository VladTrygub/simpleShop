<?php

class ProductController {

  public function actionList() {
    require_once(ROOT . '/views/product/index.php');
    return true;
  }

  public function actionCategory($category) {
    require_once(ROOT . "/views/product/byCategory.php");
    return true;
  }
  
}

?>