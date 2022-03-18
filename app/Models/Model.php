<?php

namespace App\Models;

use Database\DBConnection;
use PDO;
use stdClass;

abstract class Model {
    protected $db;
    protected $table;
    public function __construct(DBConnection $db)
    {
        $this->db = $db;
    }
    public function all():array
    {
        $stmt = $this->db->getpdo()->query("SELECT * FROM {$this->table}");
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
        return $stmt->fetchAll();
    }

    public function findById(int $idAdmin): Model{
        $stmt = $this->db->getpdo()->prepare("SELECT * FROM {$this->table } WHERE idAdmin = ?");
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
        $stmt->execute([$idAdmin]);
        return $stmt->fetch();
    }
//    public function create(array $data, ?array $relations = null)
//    {
//        $firstP = "";
//        $secondP = "";
//        $i = 1;
//        foreach ($data as $key => $value)
//        {
//            return $this->query("INSERT INT0 {$this->table} ($firstP) VALUES ($secondP)");
//        }
//    }


//    public function delete(int $id):bool
//    {
//        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id]);
//    }


    public function query(string $sql, array $params = null, bool $single = null)
    {

        $method = is_null($params) ? 'query' : 'prepare';

        if (
            strpos($sql, 'DELETE') === 0
            || strpos($sql, 'UPDATE') === 0
            || strpos($sql, 'INSERT') === 0) {

            $stmt = $this->db->getPDO()->$method($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
            return $stmt->execute($params);
        }

        $fetch = is_null($single) ? 'fetchAll' : 'fetch';

        $stmt = $this->db->getPDO()->$method($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);

        if ($method === 'query') {
            return $stmt->$fetch();
        } else {
            $stmt->execute($params);
            return $stmt->$fetch();
        }
    }

}
