<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .langs a.active {
            font-weight: 700;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
            </ul>

            <ul class="navbar-nav mb-2 mb-lg-0 langs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">en</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">fr</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@dump(app()->getLocale())

@yield('content')

</body>
</html>
