@extends('layouts.frontend.app')

@section('title', 'reset')

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
    <h1 class="title display-table-cell"><b>Reset password</b></h1>
</div><!-- slider -->
<br>
<br>
<div class="container">
    <div class="row justify-content-center">

        <div class="col-lg-8 col-md-12">
            <div class="post-wrapper auth-wrap">
<br>
<p class="ml-3">Сбросить пароль</p>
<br>
<br>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Сбросить пароль') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
