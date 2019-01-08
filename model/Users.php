<?php
namespace app\model;

class Users extends Model
{
    public $login;
    public $pass;
    public $idx;

    /**
     * Users constructor.
     * @param $login
     * @param $pass
     */
    public function __construct($login, $pass)
    {
        $this->login = $login;
        $this->pass = $pass;
    }


    public function getTableName()
    {
        return "users";
    }



}