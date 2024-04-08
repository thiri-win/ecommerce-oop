<?php

namespace libs;

use PDO;
use PDOException;

class Database
{
    private $dbhost;
    private $dbname;
    private $dbusername;
    private $dbpassword;
    protected $db;

    public function __construct(
        $dbhost = "localhost", 
        $dbname = "ecommerce", 
        $dbusername = "root", 
        $dbpassword = "")
    {
        $this->dbhost = $dbhost;
        $this->dbname = $dbname;
        $this->dbusername = $dbusername;
        $this->dbpassword = $dbpassword;
    }

    public function connect()
    {
        try {
            $dsn = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $this->db = new PDO($dsn, $this->dbusername, $this->dbpassword);
            return $this->db;
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }
}

