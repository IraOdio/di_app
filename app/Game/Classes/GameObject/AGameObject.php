<?php

namespace App\Game\Classes\GameObject;

use Illuminate\Support\Facades\Log;
use Psr\Log\LoggerInterface;

abstract class AGameObject
{
    protected string $name;

    protected float $ratio;

    protected \Psr\Log\LoggerInterface $logger;

    abstract public function __construct();

    public function getLogger() : LoggerInterface
    {
        $className = (new \ReflectionClass($this))->getShortName();
        return Log::build([
            'driver' => 'daily',
            'path' => storage_path("logs/{$className}/Generals/general.log"),
        ]);
    }

}
