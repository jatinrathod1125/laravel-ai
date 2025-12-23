<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->
    <link rel="stylesheet" href="{{ asset('vendor/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon.svg') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
    @include('admin.layouts.localStorageScript')

<body class="geex-dashboard">
    @include('admin.components.header')
    <main class="geex-main-content">
        @include('admin.components.sidebar')
        @include('admin.components.customizer')

        @yield('section')
    </main>

    <!-- inject:js-->
    <script src="{{ asset('vendor/js/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('vendor/js/jquery/jquery-ui.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap/bootstrap.min.js') }}"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.6.6/dragula.min.js"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    <!-- endinject-->
</body>

</html>