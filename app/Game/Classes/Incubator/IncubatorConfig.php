<?php


namespace App\Game\Classes\Incubator;


class IncubatorConfig
{
    protected string $name;

    protected int $iteration = 1000;

    public function __construct()
    {
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
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
