<?php

namespace DemoBundle;

use Framework\Bundle;

class DemoBundle extends Bundle
{
    public function boot()
    {
        \Framework\Template::addGlobal('global_var', 'this is global var');
    }
}