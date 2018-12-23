<?php
//Придумать класс, который описывает любую сущность из предметной области интернет-магазинов: продукт, ценник, корзина,
// заказ, пользователь и т.п.

/**
 * Class Product
 * @param {int} $id this is the identifier.
 * @param {string} $name this is the name product.
 * @param {int} $price this is the price.
 */
class Product {
    protected $id;
    protected $name;
    protected $price;

    function __construct()
    {
        $this->id;
        $this->name;
        $this->price;
    }

    /**
     * Render block of products.
     * @return string block of products.
     */
    public function render(){
        return "<div id='{$this->id}'><h3>{$this->name}</h3><p>Цена: {$this->price}</p></div>";
    }
}