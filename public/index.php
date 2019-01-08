<?php
use app\engine\Autoload;
use app\model\Products;


include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);


$product = new Products();


var_dump($product->getOne(2));
