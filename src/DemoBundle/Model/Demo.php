<?php

namespace DemoBundle\Model;

use Framework\Model;

class Demo extends Model
{
    public function getIncrementNumber($n)
    {
        $sth = $this->pdo->prepare("SELECT ? + 1");
        $sth->execute([$n]);
        return $sth->fetchColumn();
    }
}