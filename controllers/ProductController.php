<?php


namespace app\controllers;

use app\model\Products;

class ProductController extends Controller
{


    public function actionIndex() {
        $products = Products::getAll();
        echo $this->render('catalog', ['products' => $products]);
    }

    public function actionCard() {

        $id = $_GET['id'];
        $product = Products::getOne($id);
//        var_dump($product);
        echo $this->render('card', ['product' => $product]);
    }


}