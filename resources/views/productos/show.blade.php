<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mostrar Producto {{$id}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
@extends('layouts.master')

@section('content')

   <p>Mostrar {{$id}}</p>

@stop
    </body>
</html>
