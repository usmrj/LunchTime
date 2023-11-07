@extends('main-layout')
@section('top-bar')
    <div class="row h-100 g-0">

        <a class="col d-flex justify-content-center"> <!-- TODO: ZMIENIC HREF -->
            <span class="fs-3 chg-color align-self-center"> Dodaj obiad do bazy</span>
        </a>
        <a class="col  d-flex justify-content-center border-bottom border-5 border-main_color"> <!-- TODO: ZMIENIC HREF -->
            <span class="fs-3 chg-color active-tab  align-self-center"> Modyfikuj menu</span>
        </a>
        <a class="col  d-flex justify-content-center"> <!-- TODO: ZMIENIC HREF -->
            <span class="fs-3 chg-color align-self-center"> Modyfikuj obiad </span>
        </a>
    </div>
@endsection
@section('content')
@if(session('success'))
    <div class="text-main_color text-center ">
        <h3>{{ session('success') }}</h3>
    </div>
@endif
<form action="{{ route('modify-menu') }}" method="POST">
    @csrf
    <div class="row vh-100 justify-content-center ">
        <div class="col-4 d-flex justify-content-end h-75">
            <select name="month" class="text-input form-button text-center border border-3 border-main_color rounded-3  align-self-center"
                 id="monthSelect" onchange="days()" required>
                <option value="" disabled selected hidden>Wybierz miesiąc</option>
                <option value="09" >Wrzesień</option>
                <option value="10">Październik</option>
                <option value="11">Listopad</option>
                <option value="12">Grudzień</option>
                <option value="01">Styczeń</option>
                <option value="02">Luty</option>
                <option value="03">Marzec</option>
                <option value="04">Kwiecień</option>
                <option value="05">Maj</option>
                <option value="06">Czerwiec</option>
            </select>
        </div>
        <div class="col-2 d-flex justify-content-center h-75">
            <select name="day" id="daySelect" class="text-input form-button text-center border border-3 border-main_color rounded-3 align-self-center" required>
                <option value="" disabled selected hidden>Wybierz dzień</option>
            </select>
        </div>
        <div class="col-10   h-75">
        <div class="row align-items-center h-50">
            <div class="col justify-content-center d-flex">
                <input required list="MainDish" name="MainDish" id="Main" placeholder="Wybierz główne danie" class=" ps-2 text-input active-tab border border-1 border-main_color rounded-3 form-button highlight">
                <datalist id="MainDish">
                    @foreach ($MainDishes as $Dish)
                        <option value="{{$Dish['name']}}">
                    @endforeach
                </datalist>
            </div>
        </div>
        <div class="row align-items-center h-50">
            <div class="col justify-content-center d-flex">
                <input required list="SecondDish" name="SecondDish" id="Second" placeholder="Wybierz zupę" class=" ps-2 text-input active-tab border border-1 border-main_color rounded-3 form-button highlight">
                <datalist id="SecondDish">
                    @foreach ($SecondDishes as $Dish)
                    <option value="{{$Dish['name']}}">                 
                    @endforeach            
                </datalist>
            </div>
        </div>
        </div>
        <div class="col-4 d-flex justify-content-start h-75">
            <input type="submit" value="Dodaj danie"
                class="text-input form-button border border-3 border-main_color rounded-3 align-self-center">
        </div>
    </div>
</form>
@push('scripts')


<script>
    function daysInMonth (month, year) {
    return new Date(year, month, 0).getDate();
}
        days = () =>{
        const date = new Date();
        let currYear = date.getFullYear();
        let month = document.getElementById("monthSelect");
        let select = document.getElementById("daySelect");
        select.innerHTML = ""
        let monthVal = month.options[month.selectedIndex].value;
        let daysNum;
        if (monthVal>8) {
            daysNum = daysInMonth(monthVal,currYear);
            for (let index = 1; index < daysNum+1; index++) {
                let option = document.createElement("option");
                option.innerHTML = index;
                option.value = index;
                select.appendChild(option);
            }
            }
        else{
            daysNum = daysInMonth(monthVal,currYear+1);
            for (let index = 1; index < daysNum+1; index++) {
                let option = document.createElement("option");
                option.innerHTML = index;
                option.value = index;
                select.appendChild(option);
            }
        }
    }
</script>
@endpush
@endsection
