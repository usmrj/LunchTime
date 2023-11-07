@extends('main-layout')
@section('top-bar')
    <div class="row h-100 g-0">

        <a href="{{ route('add-dish') }}" class="col d-flex justify-content-center" style="a:hover {color: rgb(243, 181, 24);}">
            <span class="fs-3 chg-color align-self-center"> Dodaj obiad do bazy</span>
        </a>
        <a class="col chg-color d-flex justify-content-center"> <!-- TODO: ZMIENIC HREF -->
            <span class="fs-3 chg-color align-self-center">Modyfikuj menu</span>
        </a>
        <a class="col chg-color d-flex justify-content-center border-bottom border-5 border-main_color">
            <span class="fs-3 chg-color active-tab align-self-center"> Modyfikuj obiad </span>
        </a>
    </div>
@endsection
@section('content')

@if(session('success'))
    <div class="text-main_color text-center ">
        <h3>{{ session('success') }}</h3>
    </div>
@endif
     
@livewire('modify-dish-screen')

@endsection
