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
                    <i class="fas fa-gift fa-lg"></i>
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
                            <img src="https://www.gravatar.com/avatar/{{ md5(Auth::user()->email) }}?s=24" alt="{{ Auth::user()->name }}" class="rounded-circle">
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a href="{{ route('admin.dashboard') }}" class="dropdown-item">Panel</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                {{ __('Cerrar sesión') }}
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
                        <input type="text" class="form-control" placeholder="Encuentralo fácil..."
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

                @guest
                    <div class="d-flex align-items-center justify-content-center">
                        @if (Route::has('login'))
                            <!-- Botón de Ingreso -->
                            <a href="{{ route('login') }}" class="custom-btn-offcanvas me-2">
                                <i class="fa-solid fa-circle-user"></i> Ingreso
                            </a>
                        @endif

                        @if (Route::has('register'))
                            <!-- Botón de Registro -->
                            <a href="{{ route('register') }}" class="custom-btn-offcanvas">
                                <i class="fa-solid fa-user-plus"></i> Registro
                            </a>
                        @endif
                    </div>
                @else
                <div data-qa="user-information" class="user-information">
                    <div class="user-avatar">
                        <!-- Imagen de perfil del usuario -->
                        <img src="https://www.gravatar.com/avatar/{{ md5(Auth::user()->email) }}?s=32" alt="{{ Auth::user()->name }}" class="rounded-circle">
                    </div>
                    <div class="user-details">
                        <!-- Saludo personalizado -->
                        <span class="user-greeting"><b>Hola</b>, {{ Auth::user()->name }}</span>
                        <!-- Icono de notificación -->
                        <div class="notification-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path fill="#FF9532" d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm3.23 15.39L12 15.45l-3.22 1.94a.502.502 0 01-.75-.54l.85-3.66-2.83-2.45a.505.505 0 01.29-.88l3.74-.32 1.46-3.45c.17-.41.75-.41.92 0l1.46 3.44 3.74.32a.5.5 0 01.28.88l-2.83 2.45.85 3.67c.10.43-.36.77-.74.54z"></path>
                            </svg>
                        </div>
                    </div>
                </div>                
                
                @endguest

                <!-- Título "SECCIONES" con clases de Bootstrap -->
                <li class="nav-item mt-2">
                    <h6 class="navbar-text text-uppercase fw-bold text-dark">SECCIONES</h6>
                    <hr class="horizontal-divider">
                </li>

                <!-- Enlace "Inicio" -->
                <li class="nav-item">
                    <a class="nav-link fs-5 text-danger" href="{{ route('web.home') }}">
                        <span class="link-text">Inicio</span>
                        <span class="icon">
                            <i class="fa-solid fa-angle-right"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>


</header>
