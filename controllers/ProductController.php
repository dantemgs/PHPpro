<?php


namespace app\controllers;

use app\model\Products;

class ProductController extends Controller
{


    public function actionIndex() {
        $products = Products::getAll();
       // var_dump($products);
        echo $this->render('catalog', ['products' => $products]);
    }

    public function actionCard() {

        $id = $_GET['id'];
        $product = Products::getOne($id);
        echo $this->render('card', ['product' => $product]);
    }


}