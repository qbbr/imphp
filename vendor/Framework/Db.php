<?php

namespace Framework;

class Db extends \PDO
{
    static protected $obj = null;
    static protected $config = [];

    static public function getPdo()
    {
        if (!self::$obj) {
            self::$obj = self::connect();
        }

        return self::$obj;
    }

    static protected function connect()
    {
        if (empty(self::$config)) {
            throw new \Framework\Exception('Database config do not set');
        }

        $options = [
            \PDO::ATTR_PERSISTENT => true,
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ];

        return new self(
            self::$config['dsn'],
            self::$config['username'],
            self::$config['password'],
            $options
        );
    }

    static public function setConfig($config)
    {
        self::$config = $config;
    }
}
