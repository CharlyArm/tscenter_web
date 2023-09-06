<!doctype html>
<html lang="es-CO">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - Technical Support Center</title>
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
    <main>
        @yield('content')
    </main>
    <!--/ Content -->

    <!-- Footer -->
    @include('layouts.web.partials.footer')
    <!--/ Footer -->

    <!-- Scripts -->
    @include('layouts.web.partials.scripts')
    <!--/ Scripts -->

</body>
</html>
