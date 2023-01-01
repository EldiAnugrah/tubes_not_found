<div class="row d-flex justify-content-start">
    <div class="col-lg-2">
        <nav id="sidebarMenu" class="col d-md-block bg-white sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column nav-icons">
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" aria-current="page" href="/">
                            <span data-feather="home" class="align-text-bottom"><i
                                    class="bi bi-house-door-fill"></i></span>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">
                            <span data-feather="home" class="align-text-bottom"><i class="bi bi-book"></i></span>Posts

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'category' ? 'active' : '' }}" href="/category">
                            <span data-feather="shopping-cart" class="align-text-bottom"><i
                                    class="bi bi-grid"></i></span>Category
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'gacha' ? 'active' : '' }}" href="/gacha">
                            <span data-feather="shopping-cart" class="align-text-bottom"><i
                                    class="bi bi-grid"></i></span>Gacha
                        </a>
                    </li>
                    @auth
                    <hr>
                        <li class="nav-item">
                            <a class="nav-link {{ $active === 'dashboard' ? 'active' : '' }}" href="/dashboard">
                                <span data-feather="shopping-cart" class="align-text-bottom"><i
                                        class="bi bi-menu-button-wide"></i></span>Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="nav-link" href="route('logout')"
                                    onclick="event.preventDefault();
                              this.closest('form').submit();">
                                    <i class="bi bi-box-arrow-right"></i><span></span>Logout</a>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
