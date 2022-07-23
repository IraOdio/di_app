<?php

namespace App\Game\Classes\Incubator;

use App\Game\Classes\GameObject\GameObjectList;

interface IIncubator
{
    public function start();

    public function stop();
}
