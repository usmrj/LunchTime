<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    @yield('head')
@show
</head>

<body>
<div class=" vh-100 w-100 background-grad overflow-y-hidden">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-3 vh-100 left-bar">
                <div class="col-20 h-25 align-items-start fs-2  mt-4 justify-content-center d-flex">
                    @section('left-bar-top')
                    <p class="chg-color"> Admin</p>
                    @show
                </div>
                <div class="col-20 h-50 align-items-start d-flex">
                    <div class="row">
                        <a href="jajobajo">Statystyki</a>
                    </div>
                    <div class="dropdown-center row">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Centered dropdown
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Action two</a></li>
                          <li><a class="dropdown-item" href="#">Action three</a></li>
                        </ul>
                      </div>
                </div>
                <div class="justify-content-center align-items-end  h-25 d-flex">
                        @section('left-bar-bottom')
                        @show
                </div>
            </div>
            <div class="col-17 float-start vh-100 p-0 ">
                <div class="top-bar border-bottom border-2 border-main_color">
                    @yield('top-bar')
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-20 p-0 ">
                            @section('content')
                            @show
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>

</html>
