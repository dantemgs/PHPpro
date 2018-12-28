<?php
namespace app\model;

class Basket extends Model {
    protected $count;
    protected $total;

    public function getTableName()
    {
        return "basket";
    }
}