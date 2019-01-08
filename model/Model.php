<?php
namespace app\model;
use app\engine\Db;

abstract class Model
{
    protected $db;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }

    public function getOne($id) {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE idx = :id";
        return $this->db->queryOne($sql, [":id" => $id]);
    }

    public function getAll() {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->queryAll($sql);
    }

    public function delete()
    {
        //TODO удаление
        //обратите внимание, что не нужно тут передавать id удаляемого объекта
        //обеспечьте удаление себя типа так $Product->delete()
        //т.е. объект чтобы удалил в таблице в БД самого себя, id уже есть в public свойстве удаляемого объекта
    }
    public function insert()
    {
        //TODO добавить данные
        //То же самое, не нужно передавать параметры, они уже есть в public свойствах класса!
    }

    public function save()
    {
        //TODO Умный insert, который либо вставить данные в БД либо обновит
    }

    public function update()
    {
        //TODO изменить данные
        //если успеете, хотя бы подумать
        //это уже если совсем все что выше просто и понятно
    }



    abstract public function getTableName();

}