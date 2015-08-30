@if (count($errors) > 0 )
    <div id="login-alert" class="alert alert-danger col-sm-12">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if (session('status'))
    <div id="login-alert" class="alert alert-success col-sm-12">
    	{{session('status')}}
    </div>
@endif