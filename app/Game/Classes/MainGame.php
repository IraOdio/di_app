<?php

namespace App\Game\Classes;

use App\Game\Classes\GameObject\GameObjectList;
use App\Game\Classes\GameObject\World\World;
use App\Game\Classes\Incubator\IIncubator;
use App\Game\Classes\Incubator\Incubator;
use App\Game\Classes\Storage\DbStorage;
use Illuminate\Support\Facades\Log;


class MainGame
{
    protected \Psr\Log\LoggerInterface $logger;

    public function __construct()
    {
        $this->logger = Log::build([
            'driver' => 'daily',
            'path' => storage_path('logs/MainGame/general.log'),
        ]);;
    }

    public function launch()
    {
        // TODO - Когда нибудь тут будет запуск нескольких инкубаторов

        $listGO = new GameObjectList();
       // $go = new GameObject\GameObject('zz');
       // $listGO->addElement($go);
        //        foreach ($listGO as $key => $el){
//            var_dump($el->getName());
//        }
        $dbStorage = new DbStorage();
        $configWorld = $dbStorage->getConfigWorld();

        $world = new World($configWorld);

        $this->logger->info('Something happened!');
        $listGO->addElement($world);

    }
}
