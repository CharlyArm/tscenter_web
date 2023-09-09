@extends('layouts.web.app')

@section('title', 'Registrarse')

@section('css')
    <style>
        /* Estilos para el ícono del ojo */
        .password-toggle-icon,
        .password-toggle-icon-confirm {
            position: absolute;
            right: 10px;
            top: 10px;
            cursor: pointer;
            font-size: 0.9rem;
            color: rgba(0, 0, 0, 0.5);
            /* Cambia el color aquí (rgba) */
            transition: color 0.3s ease;
            /* Agrega una transición para el cambio de color */
        }

        .password-toggle-icon::before,
        .password-toggle-icon-confirm::before {
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            content: "\f070";
            /* Ícono del ojo tachado (no visible) */
            transition: transform 0.3s ease, color 0.3s ease;
            /* Agrega una transición para el cambio de color */
        }

        .password-toggle-icon.show-password::before,
        .password-toggle-icon-confirm.show-password::before {
            content: "\f06e";
            /* Ícono del ojo abierto (visible) */
            transform: rotate(0deg);
            /* Rotación para mostrar el ojo abierto */
            color: rgba(0, 0, 0, 0.5);
            /* Cambia el color aquí (rgba) */
        }
    </style>
@endsection

@section('content')
    <main class="main-auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="register-container mt-5">
                    <h2>Registrarse</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" placeholder="Tu nombre completo"
                                    autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <input id="email" type="text"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" placeholder="Tu correo electrónico" autocomplete="email"
                                    autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="position-relative">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Contraseña" autocomplete="new-password">
                                    <i class="password-toggle-icon hide-password fas fa-eye-slash"
                                        onclick="togglePasswordVisibility('password', 'password-toggle-icon')"></i>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="position-relative">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" placeholder="Confirmar contraseña"
                                        autocomplete="new-password">
                                    <i class="password-toggle-icon-confirm hide-password fas fa-eye-slash"
                                        onclick="togglePasswordVisibility('password-confirm', 'password-toggle-icon-confirm')"></i>
                                </div>
                            </div>


                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                        </div>
                    </form>

                    <hr class="horizontal-divider">

                    <p class="register-link">
                        ¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-decoration-none">Iniciar sesión
                            aquí</a>
                    </p>

                    <a href="{{ route('web.home') }}" class="text-decoration-none btn btn-light btn-block border">
                        <i class="fa-solid fa-arrow-left"></i> Volver al inicio
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
    <script>
        function togglePasswordVisibility(inputId, iconId) {
            const passwordInput = document.getElementById(inputId);
            const passwordToggleIcon = document.querySelector(`.${iconId}`);

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                if (passwordToggleIcon) {
                    passwordToggleIcon.classList.remove('hide-password');
                    passwordToggleIcon.classList.add('show-password');
                }
            } else {
                passwordInput.type = 'password';
                if (passwordToggleIcon) {
                    passwordToggleIcon.classList.remove('show-password');
                    passwordToggleIcon.classList.add('hide-password');
                }
            }
        }
    </script>
@endsection
