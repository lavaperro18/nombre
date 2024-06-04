<!DOCTYPE html>
<html>
<head>
    <title>Mi Plantilla Laravel</title>
    <link rel="stylesheet" href="{{ asset('vendor/nombre-del-paquete/css/app.css') }}">
</head>
<body>
    @yield('content')
    <h1>Hello Work</h1>
    <script src="{{ asset('vendor/nombre-del-paquete/js/app.js') }}"></script>
</body>
</html>
