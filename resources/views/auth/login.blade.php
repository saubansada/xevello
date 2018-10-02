@extends('layouts.app')

@section('content') 

<div class="uk-position-relative">
    <img id="form" src="{{asset('images/cafe.jpeg')}}" alt="">
    <div id="overlay" class="uk-overlay-primary uk-position-cover"></div>
    <div class="uk-position-top-center">
        <br/><br/>
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-container uk-container-small">
                <div class="uk-child-width-1-1@s uk-grid-match" uk-grid>
                    <div class="">
                        <div id="formwidth" class="uk-card uk-card-body uk-text-center uk-box-shadow-small" style="background:rgba(0,0,0,.5)">
                            <h3 id="heading"><span id="xevello"> Xevello</span> <br>CafÃ© management</h3>
                            <p id="logintext">Log in</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                                        <input type="email" class="uk-input uk-form-control{{ $errors->has('email') ? ' is-invalid' : '' }} formtb" name="email" value="{{ old('email') }}" placeholder="Username" required autofocus/>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif 
                                    </div>
                                </div> 
                                <div class="uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <input type="password" class="uk-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }} formtb" placeholder="Password" name="password" required/>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif 
                                </div>
                                <p class="uk-heading-line uk-text-center">
                                    <a id="forgetpassword" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}
                                    </a>
                                </p>
                                <a href="website/index.html" class="uk-button uk-button-default uk-align-left" id="visitsite">Visit our site</a>
                                <button class="uk-button uk-button-default uk-align-right" id="signin">
                                    {{ __('Login') }}
                                </button>
                            </form> 
                            <hr style="padding-bottom:125px; " class="uk-divider-icon">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>  
@endsection
