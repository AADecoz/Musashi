<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Musashi Aikido || @yield('title')</title>
</head>
<body>
<header><nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/members">Index</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/members"Show></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/members/create">Create</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/members/{member}">Show</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/members/{member}">Update</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/members/{member}">Destroy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/members/{member}/edit">Edit</a>
                    </li>

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>
    </nav></header>

<h1>Hallo aikidoka's</h1>
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>