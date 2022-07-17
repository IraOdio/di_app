<?php

namespace App\Game\Classes\GameObject\World;

use App\Game\Classes\GameObject\AGameObject;
use App\Game\Classes\GameObject\World\Configuration\WorldConfig;

abstract class AWorld extends AGameObject
{
    protected WorldConfig $cfg;

    public function __construct(WorldConfig $cfg)
    {
        $this->cfg = $cfg;
    }
}
