<?php


namespace app\controllers;

use app\model\Products;

class ProductController extends Controller
{


    public function actionIndex()
    {
        echo "catalog";
    }

    public function actionCard()
    {
        $id = $_GET['id'];
        $product = ($id !== 'all') ? Products::getOne($id) : Products::getAll();
//        Products::getOne(5);
        if (is_array($product)) {
            foreach ($product as $one_prpsuct) {
                echo $this->render('card', ['product' => (object)$one_prpsuct]);
            }
        } else {
            echo $this->render('card', ['product' => $product]);
        }
    }


}