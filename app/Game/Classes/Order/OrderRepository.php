<?php

namespace App\Game\Classes\Order;

use App\Game\Classes\Order\Zero\Order;

class OrderRepository
{
    const NS = 'App\\Game\\Classes\\Order\\';

    protected string $prefix = EnumOrder::ZERO;

    public function __construct()
    {
    }

    public function createOrder(int $order = 0)
    {
        $prefix = $this->prefix;
        if ($order === 0){
            $prefix = EnumOrder::ZERO;
        }
        if ($order === 1){
            $prefix = EnumOrder::ONE;
        }
        $classOrder = self::NS . $prefix;
        if (class_exists($classOrder)){
            return new $classOrder;
        }
        // default order - Zero
        return new Order();
    }
}
