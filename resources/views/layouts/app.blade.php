<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Bem vindo!</h1>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>Meu Projeto Laravel © {{ date('Y') }}</p>
    </footer>
</body>
</html>
