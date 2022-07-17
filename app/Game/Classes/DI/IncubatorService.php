<?php


namespace App\Game\Classes\DI;


use App\Game\Classes\Incubator\IIncubator;

class IncubatorService
{
    protected string $defaultName = 'defaultIncubator';


    public function __construct()
    {
    }

    public function getIncubator(string $name = '') : IIncubator
    {
        $config = $this->loadConfig();
        if (key_exists($name,$config)){
            $className = $config[$name]['className'];
            if (class_exists($className)) {
                return new $className();
            }
        }
        $className = $config[$this->defaultName]['className'];
        return new $className();
    }

    protected function loadConfig()
    {
        return config('game.incubatorService.incubators');
    }


}
