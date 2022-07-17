<?php

namespace App\Game\Classes\GameObject\Organism;

use App\Game\Classes\GameObject\AGameObject;
use Illuminate\Support\Facades\Log;

abstract class AOrganism extends AGameObject
{
    public function __construct(string $name = 'DefaultNameGOOO', float $ratio = 1.0)
    {
        parent::__construct($name, $ratio);
        $this->logger = Log::build([
            'driver' => 'daily',
            'path' => storage_path('logs/GameObjects/AOrganism/general.log'),
        ]);;
    }
}
