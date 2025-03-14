<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Estudos sobre laravel</title>
    </head>

    <body>
        <h1>Projeto para estudos!</h1>
        
        <a href="{{ route('usuario.cadastrar') }}">Cadastrar</a>
    </body>
</html>
