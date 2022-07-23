<?php

namespace App\Game\Classes\GameObject\World;

use App\Game\Classes\GameObject\AGameObject;
use App\Game\Classes\GameObject\World\Configuration\WorldConfig;

abstract class AWorld extends AGameObject
{
    protected WorldConfig $cfg;

    public function __construct(WorldConfig $cfg)
    {
        $this->setWorldConfig($cfg);
    }

    public function setWorldConfig(WorldConfig $cfg)
    {
        $this->cfg = $cfg;
    }

    public function getWorldConfig() : WorldConfig
    {
        return $this->cfg;
    }
}
