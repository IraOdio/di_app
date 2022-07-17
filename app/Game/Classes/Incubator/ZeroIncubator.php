<?php


namespace App\Game\Classes\Incubator;


class ZeroIncubator extends AIncubator implements IIncubator
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
