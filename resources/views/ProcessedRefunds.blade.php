@extends('main-layout')
@section('top-bar')
    <div class="row h-100 g-0">
        <a href="{{ route('refund-wait') }}" class="col d-flex justify-content-center "> <!-- TODO: ZMIENIC HREF -->
            <span class="fs-2 chg-color align-self-center"> Oczekujące zwroty</span>
        </a>
        <a class="col  d-flex justify-content-center border-bottom border-5 border-main_color">
            <span class="fs-2 chg-color active-tab  align-self-center"> Przetworzone zwroty</span>
        </a>
    </div>
@endsection
@section('content')
@if(session('success'))
    <div class="text-white text-center mt-4">
        <h3>{{ session('success') }}</h3>
    </div>
@endif
        <div class="row g-0 mb-5 justify-content-center">
            <div class="col-1 border-bottom border-2 border-main_color text-center">
                <span class="fw-bold chg-color fs-4 ">ID</span>
            </div>
            <div class="col-3 border-bottom border-2 border-main_color text-center">
                <span class="fw-bold chg-color fs-4 ">Imie</span>

            </div>
            <div class="col-3 border-bottom border-2 border-main_color text-center">
                <span class="fw-bold chg-color fs-4 ">Nazwisko</span>

            </div>
            <div class="col-3 border-bottom border-2 border-main_color text-center">
                <span class="fw-bold chg-color fs-4 ">Klasa</span>

            </div>
            <div class="col-3 border-bottom border-2 border-main_color text-center">
                <span class="fw-bold chg-color fs-4 ">Kwota</span>

            </div>
            <div class="col-3 border-bottom border-2 border-main_color text-center">
                <span class="fw-bold chg-color fs-4 ">Data zwrotu</span>

            </div>
        </div>
        <div class="overflow-y-auto h-50">        
            @foreach ($refunds as $refund)
                <div class="row mb-4 g-0 justify-content-center">
                    
                    <div class="col-1 border-bottom border-2 border-main_color text-center">
                        <span class=" chg-color fs-4 ">{{ $refund->id }}</span>
                    </div>
                    <div class="col-3 border-bottom border-2 border-main_color text-center">
                        <span class=" chg-color fs-4 ">{{ $refund->student->first_name }}</span>
                        
                    </div>
                    <div class="col-3 border-bottom border-2 border-main_color text-center">
                        <span class=" chg-color fs-4 ">{{ $refund->student->last_name }}</span>
                        
                    </div>
                    <div class="col-3 border-bottom border-2 border-main_color text-center">
                        <span class=" chg-color fs-4 ">{{ $refund->student->classes->name }}</span>
                        
                    </div>
                    <div class="col-3 border-bottom border-2 border-main_color text-center">
                        <span class=" chg-color fs-4 ">{{ $refund->amount }} zł</span>
                        
                    </div>
                    <div class="col-3 border-bottom border-2 border-main_color text-center">
                        <span class=" chg-color fs-4 ">{{ $refund->ask_for_refund_date }}</span>
                        
                    </div>
                </div>
                @endforeach
            </div>
@endsection
