<?php

namespace App\Game\Classes\GameObject\World\Configuration;

use App\Game\Classes\Boilerplate\T_GetterSetterName;
use App\Game\Classes\Order;

class WorldConfig
{
    use T_GetterSetterName;

    protected Order\AOrder $order;

    public function __construct(Order\AOrder $order)
    {
        // setConfig
        $this->order = $order;
    }

}
