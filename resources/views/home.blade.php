@extends('layout')

@section('title', 'Home Page')

@section('header')
    @include('nav')
@endsection

@section('content')
    <?php
        echo "<h1>{$hello} {$name}</h1>";
    ?>
@endsection