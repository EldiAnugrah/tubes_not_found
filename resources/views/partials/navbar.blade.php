    {{-- List --}}
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
            <div class="navbar-nav">
                <div class="nav-item text-nowrap d-flex navlist">
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
            <form class="d-flex ms-auto navsearch" action="/posts" >
                <!-- pengkondisian search -->
                @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @elseif(request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group">
                    <div class="form-outline">
                        <input type="text" class="form-control" placeholder="Cari Berita Film" name="search" value="{{ request('search') }}"/>
                    </div>
                    <button type="submit" class="btn" id="search-button"  >
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>

            {{--  profile --}}
            <div class="navbar-nav">
                <div class="nav-item text-nowrap d-flex">
                    <a class="nav-link px-3" href="#"> <img class='img-fluid rounded-circle' src="img/profile.jpg"
                            style="width: 50px; height:40px" alt=""></a>
                </div>
            </div>
        </div>
    </nav>
