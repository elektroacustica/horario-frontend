<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Horario</title>
    @yield('style')
</head>
<body>
<div class="container">
    @yield('content')
</div>

{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/materialize.min.js') !!}
@yield('script')
</body>
</html>