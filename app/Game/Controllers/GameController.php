<?php

namespace App\Game\Controllers;

use App\Game\Classes\DI\IncubatorService;

use App\Game\Classes\MainGame;
use Illuminate\Routing\Controller as BaseController;

class GameController extends BaseController
{
    public function index(){
        $mg = new MainGame();
        $mg->launch();
//        $namespaces = "App\\Game\\Classes\\Multi\Orders\\Zero\\World";
//        $w = new $namespaces();
//        $w = $w->e();
        $incubator = (new IncubatorService())->getIncubator();
        var_dump($incubator->getName());
        return view('game.game',[
            'view_data' =>  'view---data--value',

        ]);
    }
}
