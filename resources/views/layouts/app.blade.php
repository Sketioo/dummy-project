<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Laravel - @yield('title')</title>
    <style>
        html, body {
            height: 100%;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand p-2" href="#">Brand</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item px-3">
                            <a class="nav-link" href="/api/home">Home</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="/api/about">About</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="{{ route('posts.create') }}">Add Post</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <div class="container mt-4">
                <div class="error-message">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                @yield('content')
            </div>
        </main>

        <footer class="bg-dark text-white text-center p-4 mt-4">
            <div class="container">
                <p>&copy; 2024 Your Company. All rights reserved.</p>
                <p>Follow us on:
                    <a href="#" class="text-white mx-2">Facebook</a> |
                    <a href="#" class="text-white mx-2">Twitter</a> |
                    <a href="#" class="text-white mx-2">Instagram</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pp9Gm4D9Nvc7KZKJFWDRXk7g5M7cUJbdE2np3CnVzRlJ6LSnBUch8qTC0pX5BjMu" crossorigin="anonymous"></script>
</body>

</html>
