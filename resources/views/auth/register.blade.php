@extends('layouts.app')

@section('content')
<br/><br/><br/><br/>
<div uk-grid class="uk-child-width-1-3@m uk-child-width-1-1">
    <div></div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-header">{{ __('Register') }}</div>

            <div class="uk-card-body">
                <form method="POST" action="{{ route('register') }}">
                            @csrf

                    <div class="uk-margin uk-margin-remove-top"> 
                        <input id="name" type="text" class="uk-input uk-form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Username" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="uk-margin uk-margin-remove-top"> 
                        <input id="email" type="email" class="uk-input uk-form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif 
                    </div>

                    <div class="uk-margin">  
                        <input id="password" type="password" class="uk-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif 
                    </div>
 
                    <div class="uk-margin">  
                        <input id="password-confirm" type="password" class="uk-input form-control" name="password_confirmation" placeholder="Confirm Password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif 
                    </div>

                    <div class="uk-margin uk-text-center">  
                        <button type="submit" class="uk-width-1-1 uk-button uk-button-default">
                             {{ __('Register') }}
                        </button> 
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div></div>
</div> 
@endsection
