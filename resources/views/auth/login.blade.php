<html>
<head>
<meta name="csrf-token" content="{!! csrf_token() !!}" />
</head>
<body>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Oops!</strong> Por favor corrige los errores debajo:<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!! Form::open(['route' => 'auth.login', 'method' => 'POST']) !!}
    <div>
        Codigo universitario
        <input type="text" name="cod_alu" value="{{ old('cod_alu') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
            <input type="checkbox" name="remember"> Remember Me
        </div>



    <div>
        <button type="submit">Login</button>
    </div>
{!! Form::close() !!}
</body>
</html>
