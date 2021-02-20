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
	<h1>Login</h1>
    <form method="post">
    	<input type="text" name="u" placeholder="Username" required="required" />
        <input type="password" name="p" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Enviar</button>
    </form>
</div>
    </body>
</html>
