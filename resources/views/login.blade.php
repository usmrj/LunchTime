@extends('main-layout')


@section('left-bar')
@endsection
@section('content')
    <div class="col-6 position-absolute mt-5 border h-75 border-4 rounded-5 border-main_color login-form-box">
        <form action="{{ route('auth.login') }}" method="POST" class="">
            @csrf

            <div class="container-fluid">
                <div class="row">
                    <div class="col-8 mx-auto justify-content-center d-flex chg-color fw-bold mt-5 fs-2" >
                        Zaloguj
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 mx-auto justify-content-center d-flex">
                        <input name="login" type="text" placeholder="Login"
                            class="highlight login-input border border-3 border-main_color rounded-3 col-20 ps-3"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 mx-auto justify-content-center d-flex">
                        <input name="password" type="password" placeholder="Password"
                            class="highlight login-input border border-3 border-main_color rounded-3 col-20 ps-3"><br>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-8 mx-auto justify-content-center d-flex">
                            <input type="submit" value="Zaloguj się"
                            class="form-button btn btn-main_color border border-3 border-main_color rounded-3 ">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('left-bar-bottom')

@endsection