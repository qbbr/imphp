<?php

namespace Framework;

class Template
{
    protected static $paths = [];
    protected static $global = [];
    protected $file;

    public function __construct($tmpl)
    {
        foreach (self::$paths as $path) {
            if (is_file($path . $tmpl)) {
                $this->file = $path . $tmpl;
                break;
            }
        }

        if (empty($this->file)) {
            throw new \Framework\Exception(
                sprintf('template "%s" not found in (%s)', $tmpl, $this->file)
            );
        }
    }

    public function render($context = [])
    {
        extract(array_merge($context, self::$global));
        ob_start();
        include $this->file;
        return trim(ob_get_clean());
    }

    public static function setPath($path)
    {
        self::$paths[] = $path;
    }

    public static function addGlobal($key, $value)
    {
        self::$global[$key] = $value;
    }
}
