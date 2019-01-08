<?php
namespace app\engine;
use app\traits\Tsingletone;

class Db
{
    use Tsingletone;

    private $config = [
        'driver' => 'mysql',
        'host' => 'localhost',
        'login' => 'root',
        'password' => '',
        'database' => 'shop',
        'charset' => 'utf8'
    ];

    private  $connection = null;


    private function getConnection() {

        if (is_null($this->connection)) {
            $this->connection = new \PDO($this->preparePdoString(),
                $this->config['login'],
                $this->config['password']
                );
            $this->connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        }


        return $this->connection;
    }


    private function preparePdoString() {
        return sprintf("%s:host=%s;dbname=%s;charset=%s",
            $this->config['driver'],
            $this->config['host'],
            $this->config['database'],
            $this->config['charset']
            );
    }


    private function query($sql, $params = []) {
        $statement = $this->getConnection()->prepare($sql);
        $statement->execute($params);
        //В $statement будет в виде объекта результат выполнения запроса
        return $statement;
    }

    public function execute($sql, $params = []) {
        $this->query($sql, $params);
        return true;
    }

    public function queryOne($sql, $param = []) {
        return $this->queryAll($sql, $param)[0];
    }

    public function queryAll($sql, $param = []) {
        return $this->query($sql, $param)->fetchAll();
        //fetchAll() вернет нам в виде ассоциотивного массива результаты запроса
    }

}