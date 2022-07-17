<?php


namespace App\Game\Classes\DI;


use App\Game\Classes\Incubator\IIncubator;
use App\Game\Classes\Incubator\IncubatorConfig;

class IncubatorService
{

    protected IncubatorConfig $cfgIncubator;

    public function __construct(IncubatorConfig $cfg)
    {
        $this->cfgIncubator = $cfg;
    }

    public function getIncubator(string $name = '') : IIncubator
    {
        $config = $this->loadGameConfig();
        $list = $config['incubators'];
        if (key_exists($name,$list)){
            $className = $list[$name]['className'];
            if (class_exists($className)) {
                return new $className($this->getIncubatorConfig());
            }
        }
        $defaultIncubator = $config['default_incubator'];
        $className = $list[$defaultIncubator]['className'];
        return new $className($this->getIncubatorConfig());
    }

    protected function loadGameConfig()
    {
        return config('game.incubatorService');
    }

    protected function getIncubatorConfig() : IncubatorConfig
    {
        return $this->cfgIncubator;
    }


}
