<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Productos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
@extends('layouts.master')

@section('content')

    <div class="row">
        @php
            $key = 0;
        @endphp
        @foreach( $arrayProductos as $producto )
            @php
                $key++;
            @endphp
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">

                <a href="{{ url('/productos/show/' . $key ) }}">
                    <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$producto[0]}}
                    </h4>
                </a>

            </div>
        @endforeach

    </div>

@stop
    </body>
</html>
