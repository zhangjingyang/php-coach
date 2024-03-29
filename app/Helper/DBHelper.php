<?php

namespace App\Helper;

use PDO;
use PDOException;

class DBHelper
{
    private static $__instance = null;
    private $config;
    private $dsn;
    private $conn;
    private $options = [
        'table' => '',
        'fields' => '*',
        'where' => '',
        'order' => '',
        'limit' => ''
    ];

    public function __destruct()
    {
        $this->options = [
            'table' => '',
            'fields' => '*',
            'where' => '',
            'order' => '',
            'limit' => ''
        ];
    }

    private function __construct()
    {
        $ds = DIRECTORY_SEPARATOR;
        $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
        $this->config = include "{$base_dir}config{$ds}database.php";
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

    public function query(string $sql, array $vars = [])
    {
        try {
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($vars);
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function execute(string $sql, array $vars = [])
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($vars);
    }

    public function table($table)
    {
        $this->options['table'] = $table;
        return $this;
    }

    public function field(...$fields)
    {
        $fieldsStr = '`' . implode('`,`', $fields) . '`';
        $this->options['fields'] = $fieldsStr;
        return $this;
    }

    public function where($where)
    {
        $this->options['where'] = ' WHERE ' . $where;
        return $this;
    }

    public function order($order)
    {
        $this->options['order'] = ' ORDER BY ' . $order;
        return $this;
    }

    public function limit(...$limit)
    {
        $limitStr = ' LIMIT ' . implode(',', $limit);
        $this->options['limit'] = $limitStr;
        return $this;
    }

    public function get(array $vars = [])
    {
        $sql =  "SELECT {$this->options['fields']} FROM {$this->options['table']} 
        {$this->options['where']} 
        {$this->options['order']} 
        {$this->options['limit']}";
        return $this->query($sql, $vars);
    }

    public function insert(array $vars)
    {
        //INSERT INTO USERS () VALUES ()
        $fields = '`' . implode('`,`', array_keys($vars)) . '`';
        $values = "'" . implode("','", array_values($vars)) . "'";
        $sql = "INSERT INTO {$this->options['table']} ( {$fields}) VALUES ({$values})";
        $this->execute($sql);
    }
}
