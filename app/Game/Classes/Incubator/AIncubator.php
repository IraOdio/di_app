<?php

namespace App\Game\Classes\Incubator;

use App\Game\Classes\GameObject\GameObjectList;
use Illuminate\Support\Facades\Log;
use Psr\Log\LoggerInterface;
use App\Game\Classes\Incubator\Configuration\IncubatorConfig;

abstract class AIncubator
{

    protected GameObjectList $listGO;

    protected IncubatorConfig $cfgInc;


    public function __construct(IncubatorConfig $cfg)
    {
        $this->cfgInc = $cfg;

    }

    public function getGameObjectsList(): GameObjectList
    {
        return $this->listGO;
    }

    public function setGameObjectsList(GameObjectList $list)
    {
        $this->listGO = $list;
    }

    public function getName() : string
    {
        return $this->getIncubatorConfig()->getName();
    }

    public function getIncubatorConfig() : IncubatorConfig
    {
        return $this->getIncubatorConfig();
    }

    public function getLogger() : LoggerInterface
    {
        $className = (new \ReflectionClass($this))->getShortName();
        return Log::build([
            'driver' => 'daily',
            'path' => storage_path("logs/{$className}/general.log"),
        ]);
    }

    abstract protected function calculationLifeEnv();
}
