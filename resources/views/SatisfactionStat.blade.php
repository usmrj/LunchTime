@extends('main-layout')
@section('top-bar')
<div class="row h-100 g-0">
    <a href="mylink" class="col d-flex justify-content-center border-bottom border-5 border-main_color ">        <!-- TODO: ZMIENIC HREF -->
        <span class="fs-3 chg-color active-tab align-self-center" > Zadowolenie</span>
    </a>
    <a href="mylink" class="col  d-flex justify-content-center">                                    <!-- TODO: ZMIENIC HREF -->
        <span class="fs-3 chg-color align-self-center"> Zadowolenie/Frekwencja</span>
    </a>
    <a class="col chg-color d-flex justify-content-center">        <!-- TODO: ZMIENIC HREF -->
        <span class="fs-3 chg-color align-self-center"> Frekwencja</span>
    </a>        
</div>
@endsection
@section('content')

@livewire('satisfaction-stat-screen')

@endsection