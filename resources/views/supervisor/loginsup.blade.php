<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('header')
        <title>Supervisor</title>

        <link href="css/login.css" rel="stylesheet">
        
    </head>
    <body>
        @include('navigators.navigator')

        <div class="login">
	<h1>Supervisor</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
    	<div>
            <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Usuario">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div>
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

      

        <button type="submit" class="btn btn-primary btn-block btn-large">Enviar</button>
    </form>
    <br>
    <div>
        <a class="btn btn-primary  btn-block btn-large" href="{{ route('register') }}">{{ __('Registrar') }}</a>
    </div>
    
</div>
    </body>
</html>
