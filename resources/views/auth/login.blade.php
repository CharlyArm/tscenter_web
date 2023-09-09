@extends('layouts.web.app')

@section('title', 'Iniciar sesión')

@section('css')
    <style>
        /* Estilos para el ícono del ojo */
        .password-toggle-icon {
            position: absolute;
            right: 10px;
            top: 10px;
            cursor: pointer;
            transition: opacity 0.3s ease;
            color: rgba(0, 0, 0, 0.5);
            /* Cambia el color aquí (rgba) */
        }

        .password-toggle-icon.hide-password::before {
            content: "\f070";
            /* Ícono del ojo tachado (no visible) */
        }

        .password-toggle-icon.show-password::before {
            content: "\f06e";
            /* Ícono del ojo abierto (visible) */
            color: rgba(0, 0, 0, 1);
            /* Cambia el color aquí (rgba) */
        }
    </style>
@endsection

@section('content')
    <main class="main-auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="login-container mt-5">
                    <h2>Iniciar sesión</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="Correo electrónico" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 position-relative">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Contraseña">
                            <i class="password-toggle-icon fas fa-eye-slash"
                                onclick="togglePasswordVisibility('password')"></i>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
                        </div>
                    </form>

                    <p class="forgot-password">
                        <a href="{{ route('password.request') }}" class="text-decoration-none">¿Olvidaste tu
                            contraseña?</a>
                    </p>

                    <hr class="horizontal-divider">

                    <p class="register-link">
                        ¿No tienes una cuenta? <a href="{{ route('register') }}" class="text-decoration-none">Registrarse
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
        function togglePasswordVisibility(inputId) {
            const passwordInput = document.getElementById(inputId);
            const passwordToggleIcon = document.querySelector('.password-toggle-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordToggleIcon.classList.remove('fa-eye-slash');
                passwordToggleIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                passwordToggleIcon.classList.remove('fa-eye');
                passwordToggleIcon.classList.add('fa-eye-slash');
            }
        }
    </script>
@endsection
