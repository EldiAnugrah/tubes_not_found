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
                            src="img/LogoNotFound. " alt=""> </a>
                    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>

            {{-- search --}}
            <form class="d-flex ms-auto navsearch" role="search">
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