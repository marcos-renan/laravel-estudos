<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>
    <form action="{{ route('usuario.salvar') }}" method="POST">
        @csrf

        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome completo" value="{{ old('nome') }}" required><br><br>

        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email" placeholder="Seu melhor e-mail" value="{{ old('email') }}" required><br><br>

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" placeholder="Senha com no mínimo 6 caracteres" value="{{ old('senha') }}" required><br><br>

        <button type="submit">Cadastrar</button>

    </form>
</body>
</html>