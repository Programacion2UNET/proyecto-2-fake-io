<?php 

namespace App\Models;

class Database {
    private $db;

    public function getDb() {
        $this->db = new \PDO(
             DATABASE['driver'].':dbname='.DATABASE['database'].';charset=utf8;
             host='.DATABASE['host'].'',
             DATABASE['username'], 
             DATABASE['password']);

        return $this->db;
    }
}
