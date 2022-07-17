<?php

namespace App\Game\Classes\Incubator;

use App\Game\Classes\GameObject\GameObjectList;
use App\Game\Classes\GameObject\IGameObject;
use App\Game\Classes\GameObject\World\World;
use App\Game\Classes\Storage\DbStorage;

class MainIncubator extends AIncubator  implements IIncubator
{
    public function iteration()
    {
        $c = (new \ReflectionClass($this))->getShortName();
        $this->logger->info("Iteration",['class'=>"exec class {$c}"]);
        // TODO - Манипуляции над игровыми объектами
        foreach ($this->getGameObjectsList() as $key => $item)
        {

        }
    }

    protected function calculationLifeEnv()
    {

    }
}
