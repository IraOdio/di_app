<?php

namespace App\Game\Classes\GameObject\World\Configuration;

use App\Game\Classes\Order;

class WorldConfig
{
    protected string $name;

    protected Order\AOrder $order;

    public function __construct(Order\AOrder $order, string $name = 'DefaultName')
    {
        // setConfig
        $this->name = $name;
        $this->order = $order;
    }
}
