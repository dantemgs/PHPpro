<?php
use app\engine\Autoload as Autoload;
use app\engine\Db as Db;
use app\model\Model as Model;
use app\model\Products as Products;
use app\model\Users as Users;
use app\model\Basket as Basket;


include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$product = new Products(new Db());


var_dump($product);