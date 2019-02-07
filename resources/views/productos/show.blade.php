<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mostrar Producto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">
            <img src="https://picsum.photos/200/300/?random" style="height:200px"/>




        </div>
        <div class="col-sm-8">
            <h4 style="min-height:45px;margin:5px 0 10px 0">Producto:
                {{$producto[0]}}

            </h4>
            <h4 style="min-height:45px;margin:5px 0 10px 0">Categoria:
                {{$producto[1]}}

            </h4>
        </div>
    </div>


@stop
    </body>
</html>
