<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title','Untitled')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="data:image/png;base64,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" width="150px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbar">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Học phí</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Quản lý
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Quản lý sinh viên</a></li>
                <li><a class="dropdown-item" href="#">Quản lý ngành</a></li>
                <li><a class="dropdown-item" href="#">Quản lý khóa</a></li>
                <li><a class="dropdown-item" href="#">Quản lý ngành</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Tổng hợp thông tin</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Biên lai</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    <div class="container" id="wrap">
        @section('header')
            <header class="container" style="color: orange">
                <h1>BKACAD</h1>
            </header>
        @show
        <div class="container">
            @yield('content')
        </div>
        @section('footer')
            <footer class="container" style="color: black; text-align: center">
                Copyright &copy; BKACAD 2021
            </footer>
        @show
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>