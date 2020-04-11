@extends('layouts.frontend.app')

@section('title', 'Login')

@push('css')
    <link href="{{ asset('assets/frontend/css/home/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/home/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/pages/main.css') }}" rel="stylesheet">  
    <style>
        .middleauth {
            height: 25%;
            background-color: #8a2be270;
            color: white;
            font-size: 20px;
            text-shadow: 3px 3px rgba(34, 33, 32, 0.76);
        }
        .auth-wrap {
        text-align: left;
        background: white;
        padding-top: 50px;
        padding-bottom: 50px;
        }

        @media only screen and (max-width: 767px) {
            .auth-wrap {
                text-align: center;
                padding: 50px 20px;
            }
        }
    </style>
@endpush


@section('content')
<div class="slider display-table center-text middleauth">
    <h1 class="title display-table-cell"><b>Login</b></h1>
</div><!-- slider -->

<section class="blog-area section">
    <div class="container">

        <div class="row">
            <div class="col-lg-2 col-md-0"></div>
            <div class="col-lg-8 col-md-12">
                <div class="post-wrapper auth-wrap">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Запомнить меня') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Войти') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Восстановить пароль?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>


                </div><!-- post-wrapper -->
                <div class="post-wrapper auth-wrap">
                <p class="text-center"><a href="{{ route('register') }}">Регистрация</a></p>
                </div><!-- post-wrapper -->
            </div><!-- col-sm-8 col-sm-offset-2 -->
        </div><!-- row -->

    </div><!-- container -->
</section><!-- section -->
@endsection
