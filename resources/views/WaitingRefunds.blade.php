@extends('main-layout')
@section('top-bar')
    <div class="row h-100 p-0 g-0">

        <a class="col d-flex justify-content-center border-bottom border-5 border-main_color">
            <span class="fs-2 chg-color active-tab  align-self-center"> Oczekujące zwroty</span>
        </a>
        <a href="{{ route('refund-done') }}" class="col chg-color d-flex justify-content-center">
            <span class="fs-2 chg-color align-self-center"> Przetworzone zwroty</span>
        </a>
    </div>
@endsection
@section('content')
    <div class="row g-0 mb-4 justify-content-center">
        <div class="col-1 border-bottom border-2 border-main_color d-flex justify-content-center">
        </div>
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
            <span class="fw-bold chg-color fs-4 ">Data wysłania prośby</span>

        </div>
    </div>  
    <div class="overflow-y-auto h-50">
        <form action="{{ route('refund-wait') }}" method="POST">
            @csrf
    @foreach ($refunds as $refund)
    <div class="row mb-4 g-0 justify-content-center">
            <div class="col-1 border-bottom border-2 border-main_color">
                <input type="checkbox" name="check[]" id="{{ $refund->id }}" class="btn-check" value="{{ $refund->id }}">
                <label for="{{ $refund->id }}"
                    class="form-button btn btn-main_color border border-3 border-main_color rounded-3 " style="width: 30px;height:30px"></label>
            </div>
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
<div class="row h-25 justify-content-center">
    <div class="col-5 align-self-center">
        <input type="submit" class="mt-5 form-button btn btn-main_color border border-3 border-main_color rounded-3 fs-3" value="Zatwierdź zwroty">
    </div>
</div>
</form>
@endsection
