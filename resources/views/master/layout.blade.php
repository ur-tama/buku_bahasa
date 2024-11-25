<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Add favicon logo -->
    <link rel="icon" href="{{ asset('https://i.pinimg.com/736x/3a/e3/8f/3ae38f3d9944404e556a6db3ed91932b.jpg') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>

<body>
    @include('components.menu')
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>
