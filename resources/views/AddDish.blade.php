@extends('main-layout')
@section('top-bar')
    <div class="row h-100 g-0">
        <a href="" class="col d-flex justify-content-center border-bottom border-5 border-main_color">
            <!-- TODO: ZMIENIC HREF -->
            <span class="fs-4 chg-color active-tab  align-self-center"> Dodaj obiad do bazy</span>
        </a>
        <a class="col chg-color d-flex justify-content-center"> <!-- TODO: ZMIENIC HREF -->
            <span class="fs-4 chg-color align-self-center"> Modyfikuj menu</span>
        </a>
        <a class="col chg-color d-flex justify-content-center"> <!-- TODO: ZMIENIC HREF -->
            <span class="fs-4 chg-color align-self-center"> Modyfikuj obiad </span>
        </a>
    </div>
@endsection
@section('content')
@if(session('success'))
    <div class="text-main_color text-center ">
        <h3>{{ session('success') }}</h3>
    </div>
@endif
    <div class="row h-75 justify-content-center">
        <div class="col-16 background-grad  border border-3 border-main_color rounded-3 ">
    <form action="{{ route('add-dish') }}" method="POST" class="">
        @csrf       
         <div class="row mt-5 p-2">
            <div class="col text-center align-self-center">
                <span class=" chg-color fs-5"> Nazwa: </span>
            </div>
            <div class="col">
                <input name="name"type="text"
                    class="highlight text-input border border-3 border-main_color rounded-3 ps-2 pe-2 highlight"
                    placeholder="Nazwa obiadu" />
            </div>
            <div class="col text-center align-self-center">
                <span class=" chg-color fs-5"> Alergeny: </span>
            </div>
            <div class="col">
            <div class="dropdown">
                <button class=" form-button btn border border-3 border-main_color chg-color dropdown-toggle"
                    type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Wybierz alergeny
                </button>
                <div class="dropdown-menu " style="background-color: transparent; border:none;"
                    aria-labelledby="dropdownMenuButton">
                    <select name="allergens[]" class="text-input" multiple style="border:none">
                        @foreach ($allergens as $allergen)
                        <option value="{{$allergen->id}}">{{$allergen->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            </div>
        </div>
        <div class="row mt-5 p-2">
            <div class="col text-center align-self-center">
                <span class=" chg-color fs-5"> Składniki: </span>
            </div>
            <div class="col">
                <input name="ingr1"type="text"
                    class="highlight text-input border border-3 border-main_color rounded-3 ps-2 pe-2 highlight"
                    placeholder="Składnik 1" />

            </div>
            <div class="col">
                <input name="ingr2"type="text"
                    class="highlight text-input border border-3 border-main_color rounded-3 ps-2 pe-2 highlight"
                    placeholder="Składnik 2" />

            </div>
            <div class="col">
                <input name="ingr3"type="text"
                    class="highlight text-input border border-3 border-main_color rounded-3 ps-2 pe-2 highlight"
                    placeholder="Składnik 3" />
                    </div>

        </div>
        <div class="row  mt-5 p-2 justify-content-end">
            <div class="col-5">
                <input name="ingr4"type="text"
                    class="highlight text-input border border-3 border-main_color rounded-3 ps-2 pe-2 highlight "
                    placeholder="Składnik 4" />

            </div>
            <div class="col-5">
                <input name="ingr5"type="text"
                    class="highlight text-input border border-3 border-main_color rounded-3 ps-2 pe-2 highlight"
                    placeholder="Składnik 5" />


                    </div>

                </div>
                <div class="row mt-5 p-2 justify-content-around">
                    <div class="col-5 text-end ">
                        <input type="checkbox" name="IsMain" id="isMain" class="btn-check">
                        <label for="isMain"
                            class="form-button btn btn-main_color  border border-3 border-main_color rounded-3"> Główne
                            danie </label>
                    </div>
                    <div class="col-5 text-start">
                        <input type="checkbox" name="IsAlternative" id="UPO" class="btn-check">
                        <label for="UPO"
                            class="form-button btn btn-main_color  border border-3 border-main_color rounded-3"> Dla
                            alergików </label>
                    </div>


                </div>
                <div class="row mt-5 p-2 justify-content-center d-flex">
                    <div class="col-1 ">
                        <input type="submit" value="Dodaj obiad"
                            class="form-button btn btn-main_color border border-3 border-main_color rounded-3 ">
                    </div>
                </div>
                {{-- <div class="row mt-5 p-2">
            <div class="col text-center ">
                <span class=" chg-color fs-5"> Przyjmowany format: CSV </span>
            </div>

        </div>
        <div class="row p-2 justify-content-center">
            <div class="col-5 ">
                <input type="submit" value="Importuj"
                class="form-button btn btn-main_color border border-3 border-main_color rounded-3 ">            <!-- TODO: jak będzie czas-->
            </div>

        </div> --}}
            </form>
        </div>
    </div>
@endsection
