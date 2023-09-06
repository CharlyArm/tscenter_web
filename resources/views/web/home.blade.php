@extends('layouts.web.app')

@section('title', 'Inicio')

@section('css')
    <style>
        .card-bg-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('{{ asset('img/card-hero1.png') }}');
            background-size: cover;
            /* Ajusta el tamaño para cubrir toda la tarjeta */
            background-position: center;
            /* Centra la imagen */
            filter: brightness(50%);
            /* Cambia el valor (50%) para ajustar la oscuridad */
        }

        /* Estilo para la tarjeta personalizada */
        .custom-card {
            /* Anula la altura heredada en dispositivos medianos */
            height: auto !important;
        }

        /* Estilos para las diapositivas del carrusel */
        .carousel-item {
            position: relative;
            height: 400px;
            /* Altura en pantallas más grandes */
        }

        /* Estilo de fondo oscuro con opacidad */
        .carousel-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            /* Opacidad del fondo */
            z-index: 1;
        }

        /* Estilos de diapositivas */
        .carousel-caption {
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            padding: 0 15px;
        }

        /* Ajuste para pantallas más pequeñas */
        @media (max-width: 768px) {
            .carousel-item {
                height: auto;
                /* Ajusta automáticamente la altura en pantallas pequeñas */
            }
        }
    </style>

@endsection

@section('content')
    <div class="content_container">
        <div class="row">

            <div class="col-md-12 col-lg-8">
                <div class="card hero-card"></div>
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
                            <img src="{{ asset('img/card-hero.png') }}" class="d-block w-100" alt="Imagen 1">
                            <div class="carousel-caption">
                                <h1>Diapositiva 1</h1>
                                <p>Descripción de la primera diapositiva.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/card-hero.png') }}" class="d-block w-100" alt="Imagen 2">
                            <div class="carousel-caption">
                                <h1>Diapositiva 2</h1>
                                <p>Descripción de la segunda diapositiva.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/card-hero.png') }}" class="d-block w-100" alt="Imagen 3">
                            <div class="carousel-caption">
                                <h1>Diapositiva 3</h1>
                                <p>Descripción de la tercera diapositiva.</p>
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
                <div class="card h-100 shadow custom-card" style="position: relative;">
                    <img src="{{ asset('img/card-hero1.png') }}" alt="Fondo"
                        style="width: 100%; height: auto; filter: brightness(0.6);">
                    <div class="card-img-overlay text-center">
                        <h2 class="card-title text-white mt-5">El Mejor Servicio Técnico Autorizado</h2>
                        <p class="card-text text-white">Ofrecemos soluciones de alta calidad para tus necesidades técnicas.
                        </p>
                        <a href="#" class="btn btn-danger">Solicitar Servicio</a>
                    </div>
                </div>
            </div>

            <h3 class="text-center mt-5 mb-1">
                SOMOS EXPERTOS EN SERVICIO TÉCNICO
            </h3>

            <div class="col-12 col-md-3">
                <div class="card shadow mb-5 mb-md-5">
                    <div class="position-relative">
                        <img src="https://tscenter.com.co/assets/img/nevera.png" class="card-img-top pt-3"
                            alt="Servicio-nevera">
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
                        <img src="https://tscenter.com.co/assets/img/lavadora.png" class="card-img-top pt-3"
                            alt="Servicio-lavadora">
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
                        <img src="https://tscenter.com.co/assets/img/secadora.png" class="card-img-top pt-3"
                            alt="Servicio-secadora">
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
                        <img src="https://tscenter.com.co/assets/img/televisor.png" class="card-img-top pt-3"
                            alt="Servicio-televisor">
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
                        <img src="https://tscenter.com.co/assets/img/microondas.png" class="card-img-top pt-3"
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
                        <img src="https://tscenter.com.co/assets/img/estufa.png" class="card-img-top pt-3"
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
                        <img src="https://tscenter.com.co/assets/img/campana.png" class="card-img-top pt-3"
                            alt="Servicio-campana">
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
                        <img src="https://tscenter.com.co/assets/img/aire.png" class="card-img-top pt-3"
                            alt="Servicio-aire">
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
