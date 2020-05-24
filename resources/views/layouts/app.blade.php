<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
    <!-- CSS only -->
<link rel="stylesheet" href="{{URL('vendor\bootstrap\css\bootstrap.min.css')}}">


</head>
<body>
    @include('layouts.nav')
        <div class="container">
                @yield('content')

        </div>

</body>
</html>