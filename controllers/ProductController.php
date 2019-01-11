<?php


namespace app\controllers;

use app\model\Products;

class ProductController extends Controller
{


    public function actionIndex() {
        echo "catalog";
    }

    public function actionCard() {
        $id = $_GET['id'];
        $product = Products::getOne($id);
        echo $this->render('card', ['product' => $product]);
    }


}