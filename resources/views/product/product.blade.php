@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="{{asset('/public/app_product/css/product.css')}}">
    <div class="container">
        Product-app Container, before root
        <div id="root">

        </div>
    </div>
    <script src="{{asset('/public/app_product/js/product.js')}}"></script>
@endsection
