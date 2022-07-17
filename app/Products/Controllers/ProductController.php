<?php

namespace App\Products\Controllers;

class ProductController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        return view('product.product');
    }
}
