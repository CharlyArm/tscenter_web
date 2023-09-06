<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" />
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

<!-- Scripts -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@yield('css')
