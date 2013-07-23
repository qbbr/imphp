<?php

namespace Framework;

class Registry
{
    static protected $registry = [];

    static public function get($key = null)
    {
        if (null === $key) return self::$registry;

        return self::$registry[$key];
    }

    static public function set($key, $value)
    {
        self::$registry[$key] = $value;
    }
}
