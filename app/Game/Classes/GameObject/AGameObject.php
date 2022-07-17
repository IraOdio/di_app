<?php

namespace App\Game\Classes\GameObject;

use Illuminate\Support\Facades\Log;

abstract class AGameObject implements IGameObject
{
    protected string $name;

    protected float $ratio;

    protected \Psr\Log\LoggerInterface $logger;

    public function __construct(string $name = 'DefaultNameGOOO', float $ratio = 1.0)
    {
        $this->name = $name;
        $this->ratio = $ratio;


        $className = (new \ReflectionClass($this))->getShortName();
        $this->logger = Log::build([
            'driver' => 'daily',
            'path' => storage_path("logs/{$className}/Generals/general.log"),
        ]);;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function lifeCycle()
    {
        // TODO: Implement lifeCycle() method.
    }
}
