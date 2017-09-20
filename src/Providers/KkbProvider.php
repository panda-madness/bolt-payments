<?php

namespace Bolt\Extension\PandaMadness\Payment\Providers;


class KkbProvider implements ProviderInterface
{
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
    }
}