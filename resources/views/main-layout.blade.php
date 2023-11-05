<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    @yield('head')
@show
</head>
    @php
    if (str_contains(url()->current(), "login"))
    {
    }
    @endphp 
<body>
<div class=" vh-100 w-100 background-grad overflow-y-hidden">                 <!-- TODO cos źle działa wyświetlanie kolorów -->
    <div class="container-fluid ">
        <div class="row">
            <div class="col-3 vh-100 left-bar">
                <div class="col-20 h-25 align-items-start fs-2  mt-4 justify-content-center d-flex">
                    @section('left-bar-top')
                        <p class="chg-color"> Admin</p>
                    @show
                </div>
                <div class="col-20 h-50 container">
                    @section('left-bar-mid')
                            <div class="row mb-5">
                                <div class="col">
                                    <span><a href="jajobajo" class="chg-color fs-3 ">Statystyki</a></span>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col ">
                                    <a href="jajobajo" class="col-20 chg-color fs-3">Użytkownicy</a>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col">
                                    <a href="jajobajo" class="col-20 chg-color fs-3">Menu</a>
                                </div>
                                </div>
                            <div class="row mb-5">
                                <div class="col ">
                                    <a href="jajobajo" class="col-20 chg-color fs-3">Zwroty</a>
                                </div>
                            </div>
                    @show
                </div>
                <div class="justify-content-center h-25 d-flex">
                    @section('left-bar-bottom')
                        @auth
                            <form action="{{ route('auth.logout') }}" method="POST">
                                @csrf
                                <input class="mt-5 form-button btn btn-main_color border border-3 border-main_color rounded-3 fs-3" type="submit" value="Wyloguj" />
                            </form>
                        @endauth
                    @show
                </div>
            </div>
            <div class="col-17 float-start vh-100 p-0 ">
                <div class="top-bar border-bottom border-2 border-main_color">
                    @yield('top-bar')
                </div>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>
