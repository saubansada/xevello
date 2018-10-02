@extends('layouts.app')

@section('content')
<br/><br/><br/><br/><br/>
<div uk-grid class="uk-child-width-1-3@m uk-child-width-1-1">
    <div></div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-header">{{ __('Forgot Password') }}</div>

            <div class="uk-card-body">
                @if (session('status'))
                    <div class="uk-alert uk-alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
    
                    <div class="uk-margin uk-margin-remove-top"> 
                        <input id="email" type="email" class="uk-input uk-form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback uk-text-warning" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif 
                    </div>
    
                    <div class="uk-margin uk-text-center">  
                        <button type="submit" class="uk-width-1-1 uk-button uk-button-default">
                                {{ __('Send Password Reset Link') }}
                        </button> 
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div></div>
</div> 
@endsection
