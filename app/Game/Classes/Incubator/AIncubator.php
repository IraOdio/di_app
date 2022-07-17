<?php

namespace App\Game\Classes\Incubator;

use App\Game\Classes\GameObject\GameObjectList;
use Illuminate\Support\Facades\Log;

abstract class AIncubator
{
    protected string $name;

    protected int $iteration;

    protected GameObjectList $listGO;

    protected \Psr\Log\LoggerInterface $logger;

    public function __construct(string $name = 'DefaultNammeIncubator',int $iteration = 1000)
    {
        //$this->listGO = $listGO;
        $this->iteration = $iteration;
        $this->name = $name;
        $className = (new \ReflectionClass($this))->getShortName();
        $this->logger = Log::build([
            'driver' => 'daily',
            'path' => storage_path("logs/{$className}/general.log"),
        ]);;
    }

    public function getGameObjectsList(): GameObjectList
    {
        return $this->listGO;
    }

    public function getName() : string
    {
        return $this->name;
    }

    abstract protected function calculationLifeEnv();
}
