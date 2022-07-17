<?php

namespace App\Http\SomeService;

class SomeServiceHelper
{
    public function SomeHelperMethod(int $key = 0){
        $data = [
            'message' => 'SomeHelperMethod'
        ];
        $message = 'SomeHelperMethod, key = ' . $key;
        if ($key === 1) throw new SomeException($message . "; Exception");
        return $data;
    }
}
