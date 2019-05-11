<?php
namespace Lib\Db;

class DbFactory
{

    private static $conn;

    public static function createObject()
    {
        global $config;
        
        if (! self::$conn) {
            
            $dsn = "{$config['driver']}:host={$config['host']};
                          dbname={$config['dbname']}
                         ";
            self::$conn = new \PDO($dsn, $config['user'], $config['pass']);
            
            self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        
        return self::$conn;
    }
}