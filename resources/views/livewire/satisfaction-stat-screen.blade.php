
<div>
    <div class="custom-control custom-radio">
        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" wire:click="fetchDataFromDatabase('dish')">
        <label class="custom-control-label fw-bold chg-color fs-4" for="customRadio1">dish</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" wire:click="fetchDataFromDatabase('day')">
        <label class="custom-control-label fw-bold chg-color fs-4" for="customRadio2">day</label>
      </div>
    <div wire:loading>
        <h1 class="text-center text-white">Ładowanie...</h1>
    </div>

    <div wire:loading.remove>
        @if (!empty($data))
                <select wire:model="selectedOption" wire:change="handleChangeDish" class="text-input form-button text-center border border-3 border-main_color rounded-3 " style="max-width: 150px">
                    <option value="">wybierz obiad</option>
                    </div>
                    @foreach ($data as $key => $value) 
                    <option value=" {{$key}} ">{{$value}}</option>
                    @endforeach
                    </select>
        @endif
        @if (isset($good) && isset($bad) && isset($middle))

            <p class="text-white">dobre obiady {{ $good }}</p><br>
            <p class="text-white">średnie obiady {{ $middle }}</p><br>
            <p class="text-white">słabe obiady {{ $bad }}</p><br>

        @endif
        @if (isset($dates))
        <select wire:model="selectedOption" wire:change="handleChangeDate" class="text-input form-button text-center border border-3 border-main_color rounded-3 " style="max-width: 150px">
            <option value="">wybierz dzień</option>
            </div>
            @foreach ($dates as $date) 
            <option value="{{ $date }}">{{ $date }}</option>
            @endforeach
            </select>
        @endif
        @if (isset($good2) && isset($bad2) && isset($middle2) && isset($dishes))
            @if (isset($dishes[1]))
                <h5 class="text-white">Obiady z tego dnia to: <b>{{ $dishes[0]['name'] }}</b> i <b>{{ $dishes[1]['name']}}</b></h2>
            @else
                <h5 class="text-white">Obiad z tego dnia to: <b>{{ $dishes[0]['name'] }}</b></h2>
            @endif
        <p class="text-white">dobre obiady {{ $good2 }}</p><br>
        <p class="text-white">średnie obiady {{ $middle2 }}</p><br>
        <p class="text-white">słabe obiady {{ $bad2 }}</p><br>
        @endif
        @if (isset($error))
            <h2 class="text-red">brak obiadów dla tego dnia</h2>
        @endif
        
    </div>
</div>