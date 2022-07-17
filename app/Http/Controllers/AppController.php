<?php

namespace App\Http\Controllers;

use App\Http\SomeService\SomeService;

class AppController extends Controller
{
    public function app(){
        $service = new SomeService();

        $data = [
            'app' => 'appController',
            'loadFormOne' => $service->loadForm(1),
            'loadFormSecond' => $service->loadForm(2)
        ];
        return view('welcome', ['data' => $data]);
    }
}
