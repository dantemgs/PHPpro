<?php
namespace app\model;

class Products extends DbModel
{
    public $idx;
    public $name;
    public $description;
    public $price;


    /**
     * Products constructor.
     * @param $idx
     * @param $name
     * @param $description
     * @param $price
     */
    public function __construct($idx = null, $name = null, $description = null, $price = null)
    {
        parent::__construct();
        $this->idx = $idx;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }


    public static function getTableName()
    {
        return "products";
    }


}

