<?php


namespace App\Game\Classes\Storage;


use App\Game\Classes\GameObject\World\Configuration\WorldConfig;

interface GameStorage
{
    public function getConfigWorld() : WorldConfig;
}
