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

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
//$a1->foo(); //1 Так как преинкремент прибавит к 0 1
//$a2->foo(); //2 Так как переменная $x статична, то преинкремент изменит 1 на 2.
//$a1->foo(); //3 Так как переменная $x статична, то преинкремент изменит 2 на 3.
//$a2->foo(); //4 Так как переменная $x статична, то преинкремент изменит 3 на 4.


class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); //1 Так как преинкремент прибавит к 0 1.
$b1->foo(); //1 Так как преинкремент прибавит к 0 1.
$a1->foo(); //2 Так как переменная $x статична в классе А, то преинкремент изменит 1 на 2.
$b1->foo(); //2 Так как переменная $x статична в классе В, то преинкремент изменит 1 на 2.