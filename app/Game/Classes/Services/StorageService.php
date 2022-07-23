<?php


namespace App\Game\Classes\Services;


use App\Game\Classes\Storage\GameStorage;

class StorageService
{
    public function __construct()
    {
    }

    public function getStorage(string $name = '') : GameStorage
    {
        $config = $this->loadGameConfig();
        $list = $config['storages'];
        if (key_exists($name,$list)){
            $className = $list[$name]['className'];
            if (class_exists($className)) {
                return new $className();
            }
        }
        $defaultIncubator = $config['default_storage'];
        $className = $list[$defaultIncubator]['className'];
        return new $className();
    }

    protected function loadGameConfig()
    {
        return config('game.storageService');
    }
}
