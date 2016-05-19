<?php

class Router {
  
  private $routes;
  private $logger;

  public function __construct() {
    $this->logger = Logger::getLogger(__CLASS__);
    $routesPath = ROOT . '/configs/routes.php';
    $this->routes = include($routesPath);
    $this->logger->debug(' :: $routes :: ' . implode(", ", $this->routes) . "\n");
  }

  public function run() {
    $uri = $this->getURI();
    $this->logger->debug(" :: \$uri :: $uri \n");

    foreach ($this->routes as $uriPattern => $path) {

      if (preg_match("~$uriPattern~", $uri)) {
        $this->logger->debug(" :: \$uriPattern :: $uriPattern");
        $this->logger->debug(" :: \$path :: $path \n");
        
        $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
        $this->logger->debug(" :: \$internalRoute :: $internalRoute");

        $segments = explode('/', $internalRoute);
        $this->logger->debug(" :: \$segments :: " . implode(', ', $segments) . "\n");

        $controllerName = ucfirst(array_shift($segments) . 'Controller');
        $this->logger->debug(" :: \$controllerName :: $controllerName");
        $actionName = 'action' . ucfirst(array_shift($segments));
        $this->logger->debug(" :: \$actionName :: $actionName");
        $params = $segments;
        $this->logger->debug(" :: \$params :: " . implode(', ', $params) . "\n");

        $controllerFile = ROOT . "/controllers/$controllerName.php";
        $this->logger->debug(" :: \$controllerFile :: $controllerFile \n");

        if (file_exists($controllerFile))
          include_once($controllerFile);

        $controller = new $controllerName();
        $result = call_user_func_array(array($controller, $actionName), $params);
        
        if ($result != null)
          break;
      }
    }
  }

  private function getURI() {
    if (!empty($_SERVER['REQUEST_URI']))
      $uri = trim($_SERVER['REQUEST_URI'], '/');
    return $uri;
  }

}

?>