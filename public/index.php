<?php
use app\engine\Autoload;
use app\model\Products;

/**
 * @var Products $product
 */

include "../config/config.php";
include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$controllerName = $_GET['c'] ?: 'product';

$actionName = $_GET['a'];

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new \app\engine\Render());
    $controller->runAction($actionName);
}

