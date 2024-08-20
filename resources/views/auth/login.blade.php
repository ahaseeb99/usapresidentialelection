@extends('layouts.app')

<?php 


use App\Http\Controllers\Auth\LoginController;
if(isset($_GET["redirect"])){
$url =  $_GET["redirect"];
 $session_id = Session::getId();

 echo LoginController::scenario($url,$session_id);
 } ?>
@section('content')
<section class="main news-hero-banner-bg">
    <h1 class="pb-0 mb-0">
        @lang('words.Login')
    </h1>
    <div class="biden--img d-none"></div>
</section>
<div class="login-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card login-card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            <input type="hidden" name="redirect_url" value="{{ app('request')->input('redirect') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="">@lang('words.Email Address')</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="">@lang('words.Password')</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            @lang('words.Remember Me')
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12 d-flex justify-content-center align-items-center">
                                    <button type="submit" class="btn btn-outline-success primary-button me-2">
                                        @lang('words.Login')
                                    </button>
                                    <a href={{route('google.login')}} class="btn btn-outline-success primary-button">@lang('words.Login With Google')</a>
                                </div>
                                <div class="col-md-12 d-flex justify-content-center align-items-center">
                                    @if (Route::has('password.request'))
                                    <a class="primary-color fw-semibold mt-3" href="{{ route('password.request') }}">
                                        @lang('words.Forgot Your Password?')
                                    </a>
                                    @endif
                                </div>

                                <div class="col-md-12">
                                    <span class="mt-3 d-block text-center">
                                        @lang("words.Don't have an account?") <a href="{{ route('register', ['redirect' => app('request')->input('redirect')]) }}" class="secondary-color fw-semibold">@lang('words.Register Here.')</a>
                                    </span>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
