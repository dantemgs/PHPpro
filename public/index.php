<?php
use app\engine\Autoload;
use app\model\Products;


include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);


$product = new Products(null,'Шоколадка', 'Это шоколадка', '100');


var_dump($product->getOne(2));
