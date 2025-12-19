<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('build/images/fav.png') }}">
    <title>@yield('title') | Openup AI Generator Dashboard</title>

    @yield('css')

    @include('layouts.head-css')

</head>

<body>

    @yield('content')

    @include('layouts.script')

</body>
  
</html>