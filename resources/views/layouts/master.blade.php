<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titulo - @yield('titulo')</title>
</head>
<body>
    @section('header')
        <h1>CABECERA DE LA WEB (master)</h1>
    @show
    <hr>
    <div class="container">
        @yield('content')    
    </div>
         
    @section('footer')
        <hr>
        <h2>PIE DE PAGINA DE LA WEB (master)</h2>
    @show
</body>
</html>