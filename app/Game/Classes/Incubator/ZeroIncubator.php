<?php


namespace App\Game\Classes\Incubator;


class ZeroIncubator extends AIncubator implements IIncubator
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
