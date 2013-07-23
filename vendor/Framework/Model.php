<?php

namespace Framework;

use Framework\Db;

abstract class Model
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = Db::getPdo();
    }
}
