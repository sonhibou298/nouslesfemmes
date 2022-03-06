<?php

namespace App\Models;

use Database\DBConnection;

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
        return $stmt->fetchAll();
    }
}