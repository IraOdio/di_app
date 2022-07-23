<?php

namespace App\Game\Classes\GameObject\World;

use App\Game\Classes\GameObject\IGameObject;
use App\Game\Classes\GameObject\World\Configuration\WorldConfig;

class World extends AWorld implements IGameObject
{
    protected WorldConfig $cfg;

    public function __construct(WorldConfig $cfg)
    {
        parent::__construct($cfg);
    }
}
