<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    @vite(['resources/css/bootstrap.min.css' , 'resources/js/bootstrap.js'])

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">TiendaWep</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('nosotros') }}">nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('productos') }}">productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('administrador') }}">administrador</a>
                    </li>
                    
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>

    <div class="container">
        <br>
        <div class="row">