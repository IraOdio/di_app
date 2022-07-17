<?php

namespace App\Game\Classes\GameObject\World;

use App\Game\Classes\GameObject\World\Configuration\WorldConfig as WorldConfig;

class orldRepository
{
    const NS = "App\\Game\\Classes\\Multi\Orders";
    public function createWorld(WorldConfig $cfg)
    {
        $order = "Zero";
        $classWorld = "{NS}{$order}\\World";
        if (class_exists($classWorld))
            return $classWorld;
        else {
            // TODO: Throw new Exception...
        }
    }
}
