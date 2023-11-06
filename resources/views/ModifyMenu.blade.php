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
    <div class="row vh-100 " >
        <div class="col-5 d-flex justify-content-center pe-5">
            <select class="text-input form-button text-center border border-3 border-main_color rounded-3 align-self-center"
                style="max-width: 150px" {{-- wire:model="month"--}} >
                <option value="9">Wrzesień</option>
                <option value="10">Październik</option>
                <option value="11">Listopad</option>
                <option value="12">Grudzień</option>
                <option value="1">Styczeń</option>
                <option value="2">Luty</option>
                <option value="3">Marzec</option>
                <option value="4">Kwiecień</option>
                <option value="5">Maj</option>
                <option value="6">Czerwiec</option>
            </select>
        </div>
        <div class="col-15 ">
            {{-- <div>
                <!-- Previous code here -->
            
                <div class="row">
                    @php
                        $daysInMonth = 20; // Replace with the actual number of working days
                        $startDay = 3; // Replace with the starting day of the month
                    @endphp
            
                    @for ($day = 1; $day <= $daysInMonth; $day++)
                        @if ($day >= $startDay && $day <= $startDay + 4)
                            <div class="col-2">
                                <div class="box border border-3 border-main_color" style="background-color:#2C2C2C">
                                    <!-- Display the day and dishes -->
                                    <p class="day-label">Day {{ $day }}</p>
                                    <div class="box-content">
                                        <div wire:click="toggleDishes({{ $day }})" class="clickable">Main Dish: @if ($selectedDishes[$day] === 'Main') Soup @else Main @endif</div>
                                        <div wire:click="toggleDishes({{ $day }})" class="clickable">Soup Dish: @if ($selectedDishes[$day] === 'Main') Main @else Soup @endif</div>
                                        <div wire:mouseover="showAllergens({{ $day }})" class="hoverable">Hover for Allergens</div>
                                        <div wire:drag="handleDrag({{ $day }})" wire:drop.prevent wire:loading.remove class="add-dish clickable">Add Dishes</div>
                                        <div wire:dblclick="showAddDishForm({{ $day }})" class="dblclickable">Double-click to Add</div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-2" style="background: transparent;"></div>
                        @endif
                        @if ($day % 5 == 0)
                            </div>
                            <div class="row">
                        @endif
                    @endfor
                </div>
            </div>
            
            @if ($addDishFormVisible)
                <div class="add-dish-form">
                    <div>
                        <label for="mainDish">Main Dish:</label>
                        <select id="mainDish" wire:model="selectedDishes[{{ $selectedDayToAddDish }}]">
                            <option value="Main">Main Dish Option 1</option>
                            <option value="Soup">Main Dish Option 2</option>
                            <!-- Add more options for Main dishes here -->
                        </select>
                
                        <label for="soupDish">Soup Dish:</label>
                        <select id="soupDish" wire:model="selectedDishes[{{ $selectedDayToAddDish }}]">
                            <option value="Main">Soup Dish Option 1</option>
                            <option value="Soup">Soup Dish Option 2</option>
                            <!-- Add more options for Soup dishes here -->
                        </select>
                
                        <button wire:click="addDishToDay({{ $selectedDayToAddDish }})">Add</button>
                    </div>
                </div>
            @endif
            </div> --}}
        </div>
    </div>
@endsection
