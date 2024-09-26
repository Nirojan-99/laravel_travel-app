<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <header class="w-100 shadow ">
        <nav class="navbar navbar-light   container p-0 row m-auto  align-items-center">
            <a class="navbar-brand col-3" href="/"><img src="{{URL('images/apex_x_logo.png')}}" /></a>
            <div class=" text-center d-flex flex-row justify-content-center align-items-center col-8" id="navbarNav">
                <ul class="navbar-nav ml-auto d-flex flex-row fw-semibold">
                    <li class="nav-item mr-3 ">
                        <a class="nav-link" style="color:#333" href="/orders">Admin/Agent Management</a>
                    </li>
                    <li class="nav-item mr-3 ">
                        <a class="nav-link" style="color:#333" href="/">Booking Management</a>
                    </li>
                    <li class="nav-item mr-3 ">
                        <a class="nav-link" style="color:#333" href="/sliders">Package</a>
                    </li>
                    <li class="nav-item mr-3 ">
                        <a class="nav-link" style="color:#333" href="/sliders">Slider</a>
                    </li>
                </ul>
                <ul class="flex-grow-1 navbar-nav ">
                    <li class="nav-item mr-3 " >
                        <a class="navbar-brand shadow p-3" href="/" style="border-radius: 100%;"><img src="{{URL('images/home.png')}}" /></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>

</html>