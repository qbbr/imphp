<?php

namespace Framework;

abstract class Kernel
{
    protected $booted = false;

    abstract public function registerBundles();

    public function boot()
    {
        if (true === $this->booted) {
            return;
        }

        foreach ($this->getBundles() as $bundle) {
            $bundle->boot();
        }

        $this->booted = true;
    }

    protected function getBundles()
    {
        return $this->registerBundles();
    }
}
