<!doctype html>
<html lang="en">

<head>
    <title>Header</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- linking css file for styling  --}}

    <link rel="stylesheet" href="{{ asset('assets/styling.css') }}">

    {{-- google fonts --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mooli&family=Titillium+Web:wght@300&display=swap"
        rel="stylesheet">

</head>

<body>
    <header>


        <nav class="navbar navbar-expand-lg bg-body-tertiary nav_bar_0">
            <div class="container-fluid nav_bar_1">
                <a class="navbar-brand" href="/">Book Rental System</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav_bar_2 " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{route('homeView')}}">Home</a>
                        </li>
                    </ul>
                    <div class="d-flex nav_btns">
                        <a class="btn " href="{{route('registration_view')}}">Register</a>
                        <a type="button" href="{{route('login_view')}}" class="btn btn-outline-secondary">Login</a>
                    </div>
                </div>

            </div>
        </nav>
    </header> 
</body>

</html>
