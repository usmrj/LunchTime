@extends('main-layout')


@section('left-bar')
@endsection
@section('content')
    <h1 class="text-white">Witaj <b>{{ Auth::user()->name }}</b>!</h1>
@endsection

@section('left-bar-bottom')

@endsection