<?php
interface CacheInterface{
    public function get();
    public function set();
}

class Mysql implements CacheInterface{
    public function get(){

    }
    public function set(){

    }
}

class Redis implements CacheInterface{
    public function get(){

    }
    public function set(){

    }
}

class Cache{
    public static function instance($driver){
        switch(strtolower($driver)){
            case 'mysql':
                return new Mysql;
            case 'redis':
                return new Redis;
        }
    }
}

$cache = Cache::instance('redis');
var_dump($cache);