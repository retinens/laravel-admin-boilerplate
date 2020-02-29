@extends('admin.layout.auth-layout')
@section('content')
    <div class="c-app flex-row align-items-center text-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card-group">
                        <div class="card p-4">
                            <div class="card-body">
                                <h1>{{ __('Login') }}</h1>
                                <p class="text-muted">Connectez-vous à votre compte
                                @include('admin.layout.alerts')
                                <form method="POST" action="{{ route('login') }}" class="form-validate">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label for="email" class="sr-only">{{__('Email')}}</label>
                                            <div class="input-group-prepend"><span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span></div>
                                            <input class="form-control" id="email" type="email" name="email" required placeholder="{{__('Email')}}">
                                        </div>
                                    </div>
                                    <div class="form-group">

                                    <div class="input-group ">
                                        <label for="password" class="sr-only">{{__('Password')}}</label>
                                        <div class="input-group-prepend"><span class="input-group-text">
                                            <i class="fa fa-lock"></i>
                                        </span></div>
                                        <input class="form-control" id="password" type="password" required name="password" placeholder="{{__('Password')}}">
                                    </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" id="remember" name="remember">
                                            <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-primary px-4" type="submit">{{ __('Login') }}</button>
                                        </div>
                                        <div class="col-12 text-right">
                                            <a href="{{ route('password.request') }}" class="btn btn-link px-0" type="button">{{ __('Forgot Your Password?') }}</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
