<?php
//Придумать класс, который описывает любую сущность из предметной области интернет-магазинов: продукт, ценник, корзина,
// заказ, пользователь и т.п.

/**
 * Class Product
 */
class Product {
    protected $id;
    protected $name;
    protected $price;

    /**
     * Product constructor.
     * @param null {int} $id this is the identifier.
     * @param null {string} $name this is the name product.
     * @param null {int} $price this is the price.
     */
    function __construct($id = null, $name = null, $price = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * Render block of products.
     * @return string return block of products.
     */
    public function render(){
        return "<div id='{$this->id}'><h3>{$this->name}</h3><p>Цена: {$this->price}</p></div>";
    }
}

class DiscountedProduct extends Product {
    protected $discount;
    protected $discountedPrice;

    /**
     * DiscountedProduct constructor.
     * @param null {int} $id this is the identifier.
     * @param null {string} $name this is the name product.
     * @param null {int} $price this is the price.
     * @param null {proc} $discount.
     */
    function __construct($id = null, $name = null, $price = null, $discount = null)
    {
        parent::__construct($id, $name, $price);
        $this->discount = $discount;
        $this->discountedPrice = $this->calculateDiscountedPrice();
    }

    /**
     * @return float|int return discounted price.
     */
    protected function calculateDiscountedPrice(){
         return $this->price*(1 - $this->discount/100);
    }
}