<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category</title>
    <script src="https://unpkg.com/feather-icons"></script>
    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        .nav-icons .nav-item .nav-link span {
            margin-right: 20px;
            font-size: 1.3rem;
            color: #f2d11f;

        }

        .nav-icons .nav-item .nav-link:hover {
            color: #ff9900;

        }

        .nav-icons .nav-item .nav-link {
            font-size: 1.3rem;
            color: #f2d11f;
        }

        .nav-icons .nav-item:hover {
            background-color: rgb(246, 220, 201);
            border-radius: 10px;
        }

        .nav-icons .nav-item .nav-link:hover span {
            color: #ff9900;

        }

        .navlist {
            color: #ff9900;
            font-weight: bold;
        }

        .navsearch {
            width: 900px;
            color: #ff9900;


        }

        .navsearch input {
            width: 400px;

        }

        .navsearch button {
            background-color: #ff9900;
            width: 50px;
            color: white;
        }

        .nav-item,
        .nav-link {
            color: #ff9900;
        }

        .btn-category .card {
            background: linear-gradient(#ff9900, #f2d11f);
            color: white;
            margin: 20px;
            border-radius: 25px;
            text-align: center;
        }
    </style>
</head>

<body>

    {{-- List --}}
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
            <div class="navbar-nav">
                <div class="nav-item text-nowrap d-flex navlist">
                    <svg xmlns="http://www.w3.org/2000/svg " width="50" height="50" fill="currentColor"
                        class="bi bi-list " viewBox="0 0 16 16" style="margin-top: 20px">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>

                    {{--  logo --}}
                    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><img class='img-fluid'
                            src="img/LogoNotFound.png " alt=""> </a>
                    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>

            {{-- search --}}
            <form class="d-flex navsearch" role="search">
                <div class="input-group">
                    <div class="form-outline">
                        <input type="search" id="form1" class="form-control" placeholder="Cari Berita Film" />
                    </div>
                    <button type="button" class="btn">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>

            {{-- Notification --}}
            <div class="navbar-nav">
                <div class="nav-item text-nowrap d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mt-3" width="40" height="40"
                        fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                    </svg>

                    {{--  profile --}}
                    <a class="nav-link px-3" href="#"> <img class='img-fluid rounded-circle' src="img/profile.jpg"
                            style="width: 50px; height:40px" alt=""></a>
                </div>
            </div>
        </div>
    </nav>

    <br>
    <div class="row d-flex justify-content-start">
        <div class="col-lg-2">
            <nav id="sidebarMenu" class="col d-md-block bg-white sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column nav-icons">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">
                                <span data-feather="home" class="align-text-bottom"><i
                                        class="bi bi-camera-reels-fill"></i></span>About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home">
                                <span data-feather="home" class="align-text-bottom"><i
                                        class="bi bi-house-door-fill"></i></span>Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="category">
                                <span data-feather="shopping-cart" class="align-text-bottom"><i
                                        class="bi bi-grid"></i></span>Category
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users" class="align-text-bottom"><i
                                        class="bi bi-clock-history"></i></span>History
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


        <div class="col-8 justify-center btn-category">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Barat</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Indonesia</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jepang</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Korea</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Arab</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Action</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Fiksi</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Romance</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Horror</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Misteri</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Fantasi</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Dokumenter</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sejarah</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Musical</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Science</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Thriller</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">18+</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Anime</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
