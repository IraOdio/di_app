<?php


namespace App\Game\Classes\Incubator\Configuration;


use App\Game\Classes\Boilerplate\T_GetterSetterName;

class IncubatorConfig
{
    use T_GetterSetterName;

    protected int $iteration = 1000;

    public function __construct()
    {
        // default init
        $this->setName('name not setted!!!');
        $this->setIteration(1000);
    }

    public function setIteration(int $value)
    {
        $this->iteration = $value;
    }

    public function getIteration() : int
    {
        return $this->iteration;
    }
}
