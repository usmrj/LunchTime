@extends('main-layout')
@section('top-bar')
    <div class="row h-100 g-0">

        <a class="col d-flex justify-content-center"> <!-- TODO: ZMIENIC HREF -->
            <span class="fs-3 chg-color align-self-center"> Dodaj obiad do bazy</span>
        </a>
        <a class="col chg-color d-flex justify-content-center"> <!-- TODO: ZMIENIC HREF -->
            <span class="fs-3 chg-color align-self-center">Modyfikuj menu</span>
        </a>
        <a class="col chg-color d-flex justify-content-center border-bottom border-5 border-main_color">
            <!-- TODO: ZMIENIC HREF -->
            <span class="fs-3 chg-color active-tab align-self-center"> Modyfikuj obiad </span>
        </a>
    </div>
@endsection
@section('content')

@if(session('success'))
    <div class="text-white text-center mt-4">
        <h3>{{ session('success') }}</h3>
    </div>
@endif
     
@livewire('modify-dish-screen')

@endsection
