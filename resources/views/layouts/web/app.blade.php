<!doctype html>
<html lang="es-CO">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title') - TSCenter Colombia - Cuidando tus Electrodomésticos con Pasión y Compromiso
    </title>

    @include('layouts.web.partials.styles')
</head>

<body>
    <!--/ Loader -->
    @include('layouts.web.partials.loader')
    <!--/ Loader -->

    <!-- Header -->
    @include('layouts.web.partials.navbar')
    <!--/ Header -->

    <!-- Content -->
    @yield('content')
    <!--/ Content -->

    <!-- Footer -->
    @include('layouts.web.partials.footer')
    <!--/ Footer -->

    <!-- Scripts -->
    @include('layouts.web.partials.scripts')
    <!--/ Scripts -->

</body>
</html>
