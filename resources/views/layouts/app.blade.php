<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield("title", "Boolpress")</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>

<body>
    <header id="site-header" class="p-4">
        <nav class="d-flex justify-content-between">
            <div class="links">
                <a href="/" class="mr-3">Home</a>
                <a href="/posts" class="mr-3">Posts</a>
            </div>

            <div class="auth">
                <a class="mr-3" href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            </div>
        </nav>
    </header>

    <main>
        @yield("content")
    </main>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
