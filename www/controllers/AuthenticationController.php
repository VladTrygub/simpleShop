<?php

class AuthenticationController {
  
  public function actionLog() {
    require_once(ROOT . '/views/login/index.php');
    return true;
  }
  
  public function actionLogin() {
    require_once(ROOT . '/views/home/index.php');
    return true;
  }

  public function actionReg() {
    require_once(ROOT . '/views/register/index.php');
    return true;
  }

  public function actionRegister() {
    require_once(ROOT . '/views/home/index.php');
    return true;
  }
  
}

?>