<?php

namespace Framework;

class Response
{
    protected $tmpl;
    protected $context;

    public function __construct($tmpl, $context = [])
    {
        $this->tmpl = $tmpl;
        $this->context = $context;
    }

    protected function get()
    {
        return (new Template($this->tmpl))->render($this->context);
    }

    public function __toString()
    {
        return $this->get();
    }
}