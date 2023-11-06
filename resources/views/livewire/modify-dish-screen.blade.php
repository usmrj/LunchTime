@php
    $name = null;
    $ingr1 = null;
    $ingr2 = null;
    $ingr3 = null;
    $ingr4 = null;
    $ingr5 = null;
    $IsMain = null;
    $IsAlternative = null;
    $selected = null;

    if(!empty($data))
    {
        $name = $data[0]['name'];
        $ingr1 = $data[0]['ingr1'];
        $ingr2 = $data[0]['ingr2'];
        $ingr3 = $data[0]['ingr3'];
        $ingr4 = $data[0]['ingr4'];
        $ingr5 = $data[0]['ingr5'];
        $IsMain = $data[0]['IsMain'] ? 'checked' : null;
        $IsAlternative = $data[0]['IsAlternative'] ? 'checked' : null;
    }
@endphp
<div class="row pt-4 justify-content-center">
    <div class="col-16 background-grad  border border-3 border-main_color rounded-3 ">
        <form action="{{ route('modify-dish') }}" method="POST" > <!-- TODO: zmienic action-->
            @csrf
            <div class="row pt-3 justify-content-center">
                <div class="col-1 ">
                    <select wire:model="selectedOption" wire:change="handleChange" class="text-input form-button text-center border border-3 border-main_color rounded-3 "
                        style="max-width: 150px">
                        <option value="">wybierz obiad</option>
                        </div>
                            @foreach ($dishes as $dish)
                                <option value="{{ $dish }}">{{ $dish }}</option>
                            @endforeach
                        </select>
                </div>
            </div>

            <div class="row mt-5 p-2  ">
                <div class="col-5 text-end ">
                    <div wire:loading.remove>
                    <span class=" chg-color fs-5"> Nazwa: </span>
                    </div>
                </div>
                <div class="col-5">
                    <div wire:loading.remove>
                    <input name="name" type="text" value="{{ $name }}" {{$readOnly}} required
                        class=" text-input border border-3 border-main_color rounded-3 ps-2 pe-2 highlight"
                        placeholder="Nazwa obiadu" />
                    </div>
                </div>
                <div class="col-5 text-center align-self-center">
                    <div wire:loading.remove>
                    <span class=" chg-color fs-5"> Alergeny: </span>
                    </div>
                </div>
                <div class="col-5">
                    <div class="dropdown">
                        <div wire:loading.remove>
                        <button class=" form-button btn border border-3 border-main_color chg-color dropdown-toggle"
                            type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Wybierz alergeny
                        </button>
                        
                        <div class="dropdown-menu " style="background-color: transparent; border:none;"
                            aria-labelledby="dropdownMenuButton">
                            
                            <select name="allergens[]" class="text-input" multiple style="border:none">
                                @php
                                foreach ($allergens as $allergen)
                                {
                                    foreach ($dishAllergens as $dishAllergen)
                                    {
                                        if($dishAllergen == $allergen['id'])
                                        {
                                            $selected = 'selected';
                                        }
                                    }
                                    echo "<option $selected value=$allergen[id]>$allergen[name]</option>";
                                    $selected = null;
                                }
                               // <option {{$selected}} value="{{ $allergen['id'] }}">{{ $allergen['name'] }}</option>
                                @endphp
                            </select>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 p-2">
                <div class="col text-end  align-self-center">
                    <div wire:loading.remove>
                    <span class=" chg-color fs-5"> Składniki: </span>
                    </div>
                </div>
                <div class="col">
                    <div wire:loading.remove>
                        <input name="ingr1" type="text" value="{{ $ingr1 }}" {{$readOnly}} required
                        class="highlight text-input border border-3 border-main_color rounded-3 ps-2 pe-2 highlight"
                        placeholder="Składnik 1" />
                    </div>
                    

                </div>
                <div class="col">
                    <div wire:loading.remove>
                    <input name="ingr2" type="text" value="{{ $ingr2 }}" {{$readOnly}} 
                        class="highlight text-input border border-3 border-main_color rounded-3 ps-2 pe-2 highlight"
                        placeholder="Składnik 2" />
                    </div>
                </div>
                <div class="col">
                    <div wire:loading.remove>
                    <input name="ingr3" type="text" value="{{ $ingr3 }}" {{$readOnly}}
                        class="highlight text-input border border-3 border-main_color rounded-3 ps-2 pe-2 highlight"
                        placeholder="Składnik 3" />
                    </div>
                </div>

            </div>
            <div class="row  mt-5 p-2 justify-content-end">
                <div class="col-5">
                    <div wire:loading.remove>
                    <input name="ingr4" type="text" value="{{ $ingr4 }}" {{$readOnly}}
                        class="highlight text-input border border-3 border-main_color rounded-3 ps-2 pe-2 highlight "
                        placeholder="Składnik 4" />
                    </div>
                </div>
                <div class="col-5">
                    <div wire:loading.remove>
                    <input name="ingr5" type="text" value="{{ $ingr5 }}" {{$readOnly}}
                        class="highlight text-input border border-3 border-main_color rounded-3 ps-2 pe-2 highlight"
                        placeholder="Składnik 5" />
                    </div>
                </div>

            </div>
            <div wire:loading.remove>
            <div class="row mt-5 p-2 justify-content-around">
                <div class="col-5 text-end ">
                    <div wire:loading.remove>
                    <input type="checkbox" name="IsMain" id="isMain" class="btn-check" {{$readOnly}} {{$IsMain}}>
                    
                    <label for="isMain"
                        class="form-button btn btn-main_color  border border-3 border-main_color rounded-3"> Główne
                        danie </label>
                    </div>
                </div>
                <div class="col-5 text-start">
                    <input type="checkbox" name="IsAlternative" id="UPO" class="btn-check" {{$readOnly}} {{$IsAlternative}}>
                    <label for="UPO"
                        class="form-button btn btn-main_color  border border-3 border-main_color rounded-3"> Dla
                        alergików </label>
                </div>

            </div>
        </div>
            <div class="row mt-5 p-2 justify-content-center d-flex">
                <div class="col-1 ">
                    <div wire:loading.remove>
                    <input type="submit" value="Zatwierdź" {{$readOnly}}
                        class="form-button btn btn-main_color border border-3 border-main_color rounded-3 ">
                    </div>
                </div>
            </div>

            <div wire:loading>
                <h1 class="text-center text-white">Ładowanie...</h1>
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
