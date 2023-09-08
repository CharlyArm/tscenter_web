@extends('layouts.web.app')

@section('title', 'Inicio')

@section('css')
@endsection

@section('content')
    <div class="content_container">
        <div class="row">

            <div class="col-md-12 col-lg-8">
                <div class="card hero-card rounded shadow"></div>
                <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Indicadores de diapositivas -->
                    <ol class="carousel-indicators">
                        <li data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#heroCarousel" data-bs-slide-to="1"></li>
                        <li data-bs-target="#heroCarousel" data-bs-slide-to="2"></li>
                    </ol>

                    <!-- Diapositivas -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/card-hero1.png') }}" class="d-block w-100" alt="Imagen 1">
                            <div class="carousel-caption">
                                <h1>Reparación de Electrodomésticos</h1>
                                <p>Somos maestros de la modernidad e innovación.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/card-hero2.png') }}" class="d-block w-100" alt="Imagen 2">
                            <div class="carousel-caption">
                                <h1>Solución Moderna</h1>
                                <p>Innovación en cada reparación.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/card-hero3.png') }}" class="d-block w-100" alt="Imagen 3">
                            <div class="carousel-caption">
                                <h1>Reparación Avanzada</h1>
                                <p>El futuro de tus electrodomésticos.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Controles de navegación -->
                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </a>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div class="card h-100 custom-card rounded shadow" style="position: relative;">
                    <img src="{{ asset('img/card-subhero.png') }}" alt="Fondo"
                        style="width: 100%; height: auto; filter: brightness(0.6);">
                    <div class="card-img-overlay text-center">
                        <h2 class="card-title text-white mt-5">El Mejor Servicio Técnico Autorizado</h2>
                        <p class="card-text text-white">Ofrecemos soluciones de alta calidad para tus necesidades técnicas.
                        </p>
                        <a href="tel:3147368414" class="btn btn-danger">Solicitar Servicio</a>
                    </div>
                </div>
            </div>

            <h3 class="text-center mt-5 mb-3">
                SOMOS EXPERTOS EN SERVICIO TÉCNICO
            </h3>

            <div class="col-12 col-md-3">
                <div class="card shadow mb-5 mb-md-5">
                    <div class="position-relative">
                        <img src="{{ asset('img/nevera.jpg') }}" class="card-img-top pt-3" alt="Servicio-nevera">
                        <div class="overlay">
                            <i class="fas fa-play fa-3x cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#videoModal-neveras"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <b>Neveras / Refrigeradores</b>
                        </h5>
                        <p class="card-text">Servicio técnico, reparación, arreglo, mantenimiento
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3">
                <div class="card shadow mb-5 mb-md-5">
                    <div class="position-relative">
                        <img src="{{ asset('img/lavadora.jpg') }}" class="card-img-top pt-3" alt="Servicio-lavadora">
                        <div class="overlay">
                            <i class="fas fa-play fa-3x cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#videoModal-lavadora"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <b>Lavadoras</b>
                        </h5>
                        <p class="card-text">Servicio técnico, reparación, arreglo, mantenimiento.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3">
                <div class="card shadow mb-5 mb-md-5">
                    <div class="position-relative">
                        <img src="{{ asset('img/secadora.jpg') }}" class="card-img-top pt-3" alt="Servicio-secadora">
                        <div class="overlay">
                            <i class="fas fa-play fa-3x cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#videoModal-secadora"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <b>Secadoras</b>
                        </h5>
                        <p class="card-text">Servicio técnico, reparación, arreglo, mantenimiento.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3">
                <div class="card shadow mb-5 mb-md-5">
                    <div class="position-relative">
                        <img src="{{ asset('img/televisor.jpg') }}" class="card-img-top pt-3" alt="Servicio-televisor">
                        <div class="overlay">
                            <i class="fas fa-play fa-3x cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#videoModal-telivisor"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <b>Televisores</b>
                        </h5>
                        <p class="card-text">Servicio técnico, reparación, arreglo, mantenimiento.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3">
                <div class="card shadow mb-5 mb-md-5">
                    <div class="position-relative">
                        <img src="{{ asset('img/microonda.png') }}" class="card-img-top pt-3"
                            alt="Servicio-microondas">
                        <div class="overlay">
                            <i class="fas fa-play fa-3x cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#videoModal-microondas"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <b>Microondas</b>
                        </h5>
                        <p class="card-text">Servicio técnico, reparación, arreglo, mantenimiento.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3">
                <div class="card shadow mb-5 mb-md-5">
                    <div class="position-relative">
                        <img src="{{ asset('img/estufa.png') }}" class="card-img-top pt-3"
                            alt="Servicio-estufa">
                        <div class="overlay">
                            <i class="fas fa-play fa-3x cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#videoModal-estufa"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <b>Estufas</b>
                        </h5>
                        <p class="card-text">Servicio técnico, reparación, arreglo, mantenimiento.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3">
                <div class="card shadow mb-5 mb-md-5">
                    <div class="position-relative">
                        <img src="{{ asset('img/lavavajilla.jpg') }}" class="card-img-top pt-3" alt="Servicio-campana">
                        <div class="overlay">
                            <i class="fas fa-play fa-3x cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#videoModal-campana"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <b>Lavagillas</b>
                        </h5>
                        <p class="card-text">Servicio técnico, reparación, arreglo, mantenimiento.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3">
                <div class="card shadow mb-5 mb-md-5">
                    <div class="position-relative">
                        <img src="{{ asset('img/equipo.jpg') }}" class="card-img-top pt-3" alt="Servicio-aire">
                        <div class="overlay">
                            <i class="fas fa-play fa-3x cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#videoModal-aire"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <b>Equipos de sonido</b>
                        </h5>
                        <p class="card-text">Servicio técnico, reparación, arreglo, mantenimiento.
                        </p>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="videoModal-lavadora" tabindex="-1" aria-labelledby="videoModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="videoModalLabel">Lavadoras</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <iframe width="100%" height="400"
                                src="https://www.youtube.com/embed/WoSqVAKtehI?si=5QxPGkXWE0vO4wSB?autoplay=1"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('js')
@endsection
