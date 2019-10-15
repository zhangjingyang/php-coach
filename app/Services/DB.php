<?php

namespace App\Services;

use PDO;
use PDOException;

class DB
{
    private static $__instance = null;
    private $config;
    private $dsn;
    private $conn;


    private function __construct()
    {
        $this->config = include '../config/database.php';
        $this->dsn = sprintf(
            "%s:host=%s;dbname=%s;charset=%s",
            $this->config['driver'],
            $this->config['host'],
            $this->config['database'],
            $this->config['charset']
        );

        try {
            $this->connect();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    private function __clone()
    { }

    private function connect()
    {
        $this->conn = new PDO($this->dsn, $this->config['user'], $this->config['password']);
    }

    public static function getInstance()
    {
        if (self::$__instance === null) {
            self::$__instance = new self();
        }
        return self::$__instance;
    }

    public function query(string $sql, array $vars)
    {
        // $stmt = $this->conn->prepare($sql);
        // var_dump($stmt);
        // $result = $stmt->execute($vars);
        // return $result;
        $result = $this->conn->query($sql);
        return $result->fetchAll();
    }
}

$pdo = DB::getInstance();
$result = $pdo->query("select * from users", []);
var_dump($result);
