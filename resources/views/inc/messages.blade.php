<div class="uk-text-small">
    @if(count($errors) > 0)
            <div uk-alert class="uk-alert-warning">
                <a class="uk-alert-close" uk-close></a> 
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
    @endif

    @if(session('success'))
    <div uk-alert class="uk-alert-success">
        <a class="uk-alert-close" uk-close></a> 
        <p>{{session('success')}}</p>
    </div>
    @endif 

    @if(session('error'))
        <div uk-alert class="uk-alert-danger">
            <a class="uk-alert-close" uk-close></a> 
            <p>{{session('error')}}</p>
        </div>
    @endif
</div>
