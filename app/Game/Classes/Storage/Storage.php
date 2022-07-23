<?php

namespace App\Game\Classes\Storage;

use App\Game\Classes\GameObject\World\Configuration\WorldConfig;
use App\Game\Classes\Order\OrderRepository;

class Storage extends AStorage implements GameStorage
{
    public function __construct()
    {
    }

    public function getConfigWorld() : WorldConfig
    {
        // Какие-то прикольные штучки
        $orderRepository = new OrderRepository();

        return new WorldConfig(
            order: $orderRepository->createOrder()
        );
    }
}
