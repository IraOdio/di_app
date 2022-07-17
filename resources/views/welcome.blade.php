@extends('layouts.main')
@section('content')
    <script src="{{asset('public/js/@type/app.js')}}"></script>
    <h3>welcome</h3>
    @isset($data)
        <h4>dump data</h4>
        <pre>
            <?php
            dump($data);
            ?>
        </pre>
    @endisset
@endsection

