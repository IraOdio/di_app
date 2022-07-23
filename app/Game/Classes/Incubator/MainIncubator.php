<?php

namespace App\Game\Classes\Incubator;

use App\Game\Classes\GameObject\GameObjectList;
use App\Game\Classes\GameObject\IGameObject;
use App\Game\Classes\GameObject\World\World;


class MainIncubator extends AIncubator  implements IIncubator
{
    public function start()
    {
        $name = $this->getIncubatorConfig()->getName();
        $this->getLogger()->info("Iteration",['desc'=>"name incubator -> {$name}"]);
        // TODO - Манипуляции над игровыми объектами
        foreach ($this->getGameObjectsList() as $key => $item)
        {

        }
    }

    public function stop()
    {

    }

    protected function calculationLifeEnv()
    {

    }
}
