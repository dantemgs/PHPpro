<?php
namespace app\model;

class Products extends Model
{
    public $idx;
    public $name;
    public $description;
    public $price;

    /**
     * Products constructor.
     * @param $id
     * @param $name
     * @param $description
     * @param $price
     */
    public function __construct($id, $name, $description, $price)
    {
        $this->idx = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }


    public function getTableName()
    {
        return "products";
    }


}

