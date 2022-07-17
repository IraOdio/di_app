<?php

namespace App\Game\Classes\Storage;

use App\Game\Classes\GameObject\World\Configuration\WorldConfig;
use App\Game\Classes\Order\OrderRepository;

class DbStorage extends AStorage
{
    public function __construct()
    {
    }

    public function getConfigWorld(int $id = 0) : WorldConfig
    {
        // TODO - Выборка из БД
        // Какие-то прикольные штучки
        $orderRepository = new OrderRepository();

        return new WorldConfig(
            order: $orderRepository->createOrder()
        );
    }
}
