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
                <a class="text-white" href="/services">Каталог</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="bg-dark text-white text-center p-3 mt-5">
        © {{ date('Y') }} Drycleaning
    </footer>

</body>

</html>