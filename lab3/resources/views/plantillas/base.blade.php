<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('titulo')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/funciones.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @section('menu')
    @show
    @yield('contenido')
</body>
</html>