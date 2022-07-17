<?php

namespace App\Sprint\Controllers;

class SprintController extends \App\Http\Controllers\Controller
{
    public function planningSprint(){
        return view('sprint');
    }
}
