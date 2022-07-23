<?php

namespace App\Game\Controllers;

use App\Game\Classes\Services\IncubatorService;

use App\Game\Classes\MainGame;
use Illuminate\Routing\Controller as BaseController;

class GameController extends BaseController
{
    public function index(){
        $mg = new MainGame();
        $mg->launch();

        return view('game.game',[
            'view_data' =>  'view---data--value',

        ]);
    }
}
