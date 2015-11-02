<!DOCTYPE html>
{{--<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html>--}}
@extends('footer')
@section('footer')
@stop
@extends('welcome.template')
@section('template')
    <p>this is template</p>
    @stop
@section('content')
    <p>this is content</p>
    @stop
