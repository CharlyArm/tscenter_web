<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom shadow-sm fixed-top">
        <div class="container-fluid">

            <!-- Logo a la izquierda con el botón y el icono de geolocalización a la derecha -->
            <div class="navbar-brand d-flex align-items-center">
                <button class="btn btn-outline-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="{{ route('web.home') }}">
                    <img src="{{ asset('img/logo.png') }}" width="140" alt="Logo">
                </a>

                <!-- Separador (oculto en dispositivos móviles) -->
                <hr class="my-0 mx-2 vertical-divider d-none d-md-block">

                <!-- Icono de geolocalización como enlace (oculto en dispositivos móviles) -->
                <!-- Icono de geolocalización como enlace (visible en dispositivos de escritorio) -->
                <a href="#" class="text-decoration-none btn btn-outline-danger small ms-2 d-none d-md-inline">
                    <i class="fas fa-map-marker-alt fa-lg"></i>
                    Geolocalización
                </a>

            </div>

            <!-- Barra de búsqueda ajustada en el centro (visible en dispositivos medianos o más grandes) -->
            <div class="col-auto d-none d-md-block">
                <div class="input-group">
                    <input type="text" class="form-control" style="width: 500px;" placeholder="Encuentralo facil..."
                        aria-label="Search">
                    <button class="btn btn-outline-danger" type="button">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>

            <div class="d-flex align-items-center">
                <!-- Icono de campana -->
                <a href="" class="text-danger ml-2">
                    <i class="fa-regular fa-bell fa-lg"></i>
                </a>

                <!-- Separador -->
                <hr class="my-0 mx-2 vertical-divider">

                @guest
                    @if (Route::has('login'))
                        <!-- Botón de ingreso a la derecha -->
                        <a href="{{ route('login') }}" class="btn btn-outline-danger border my-2 my-sm-0">
                            <i class="fa-solid fa-circle-user"></i> Ingreso
                        </a>
                    @endif
                @else
                    <div class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>

                @endguest
            </div>

        </div>
    </nav>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                <a href="{{ route('web.home') }}">
                    <img src="{{ asset('img/icono.png') }}" width="60" alt="Icono">
                </a>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <!-- Este formulario se mostrará solo en dispositivos móviles -->
                <form class="d-block d-md-none mb-2" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Encuentralo facil..."
                            aria-label="Search">
                        <button class="btn btn-outline-danger" type="button">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>

                <!-- Icono de geolocalización como enlace (visible en dispositivos móviles) -->
                <a href="#" class="text-decoration-none btn btn-outline-danger small ms-2 d-md-none mb-3">
                    <i class="fas fa-map-marker-alt fa-lg"></i>
                    Geolocalización
                </a>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('web.home') }}">Inicio</a>
                </li>
            </ul>
        </div>
    </div>
</header>
