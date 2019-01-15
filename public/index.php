<?php
use app\engine\Autoload;
use app\model\Products;
use app\engine\TwigRender;

/**
 * @var Products $product
 */

include "../config/config.php";
include "../engine/Autoload.php";
require_once '../vendor/autoload.php';

spl_autoload_register([new Autoload(), 'loadClass']);

$controllerName = $_GET['c'] ?: 'product';

$actionName = $_GET['a'];

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new TwigRender());
    $controller->runAction($actionName);
}

