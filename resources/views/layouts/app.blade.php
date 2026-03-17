<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Drycleaning</a>

            <div>
                <a class="text-white me-3" href="/">Головна</a>
                <a class="text-white me-3" href="/services">Каталог</a>

                @auth
                    <span class="text-white me-3">
                        Привіт, {{ Auth::user()->name }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button class="btn btn-sm btn-danger">Вихід</button>
                    </form>
                @endauth

                @guest
                    <a class="text-white me-2" href="{{ route('login') }}">Увійти</a>
                    <a class="text-white" href="{{ route('register') }}">Реєстрація</a>
                @endguest
            </div>
        </div>
    </nav>

    <div class="container mt-4">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')

    </div>

    <footer class="bg-dark text-white text-center p-3 mt-5">
        © {{ date('Y') }} Drycleaning
    </footer>

</body>

</html>