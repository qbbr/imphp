<?php

namespace Framework;

use Framework\Response;

class JsonResponse extends Response
{
    public function __toString()
    {
        header('Content-type: application/json');
        return $this->get();
    }
}
