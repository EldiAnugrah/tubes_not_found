<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Slebew</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" href="../../img/LogoNotFound.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm ">
            <div class="container-fluid">
                <a class="navbar-brand" href=""><img src="../../img/LogoNotFound.png" alt=""
                        style="width: 180px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-5">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link" aria-current="page" href="/about">AboutUs</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link" href="/posts">Posts</a>
                        </li>
                        <li class="nav-item2 mx-5">
                            <a class="nav-link" aria-current="page" href="/category">Category</a>
                        </li>

                        @if (Route::has('login'))
                            @auth
                                <div class="nav-item2 dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Welcome Back, <strong>{{ auth()->user()->name }}</strong>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a class="nav-link" href="/dashboard">Dashboard</a></li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a class="nav-link" href="route('logout')"
                                                    onclick="event.preventDefault();
                                                  this.closest('form').submit();">
                                                    Logout</a>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <li class="nav-item2 mx-5">
                                    <a class="nav-link" aria-current="page" href="{{ route('login') }}">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item2 mx-5">
                                        <a class="nav-link" aria-current="page" href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <img class="trapesium" ; src="../../img/1.jpg" alt="">
        <div class="p my-5">

            <h1> <span style="color:#ff9900";> Do </span> <span style="color:#F2D11F">You</span> <span
                    style="color:#ff9900">Want</span> <span style="color:#F2D11F">To</span> <span
                    style="color:#ff9900">Know</span><br> <span style="color:#F2D11F">Movie</h1></span>
            <br>
            @if (Route::has('login'))
                @auth
                    <h2><span style="color: #F2D11F">Welcome back</span>,
                        <span style="color: #ff9900">
                            {{ auth()->user()->name }}<span style="color: #ff9900"> </span>
                    </h2>
                    <h5>Terimakasih sudah join bersama website kami <br>
                        apakah anda tertarik membuat teori film yang <br>
                        pernah anda tonton ?
                    </h5>
                @else
                    <h4>Pusing cari website yang memberikan informasi <br>
                        menarik tentang movie yang paling lengkap?<br>
                        Do You Want To Know Movie solusinya</h4>
                    <br>
                    <h5>Website yang memberikan segala informasi
                        tentang <br> movie terbaru maupun lawas</h5>
                @endauth
            @endif

        </div>


        @if (Route::has('login'))
            @auth
                <button type="button" class="btn btn-warning rounded-pill btn-lg" style="width: 250px"><span
                        class="spnB"><a class="nav-link" aria-current="page" href="{{ url('/dashboard') }}">Create
                            Post</a>
                    </span></button>
            @else
                <button type="button" class="btn btn-warning rounded-pill btn-lg" style="width: 250px"><span
                        class="spnB"><a class="nav-link" aria-current="page" href="{{ route('login') }}">Read More</a>
                    </span></button>
            @endauth
        @endif

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
