<?php

namespace App\Game\Classes;

use App\Game\Classes\Services\IncubatorService;
use App\Game\Classes\GameObject\GameObjectList;
use App\Game\Classes\GameObject\World\World;
use App\Game\Classes\Incubator\IIncubator;
use App\Game\Classes\Incubator\Configuration\IncubatorConfig;
use App\Game\Classes\Services\StorageService;
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
        $d =1;
//        $Storage = (new StorageService())->getStorage();
//        $configWorld = $Storage->getConfigWorld();
//
//        $world = new World($configWorld);
//
//        $this->logger->info('Something happened!');
//        $listGO->addElement($world);
//
//        $cfgIncubator = new IncubatorConfig();
//        $cfgIncubator->setName('ZeroInc');
//        $incubator = (new IncubatorService($cfgIncubator))->getIncubator();
//        $incubator->start();


    }
}
