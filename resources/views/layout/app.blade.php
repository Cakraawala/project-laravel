<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viweport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Cakra</title>
    <link rel="stylesheet" href="{{ asset('ASSET/CSS/app.css') }}">
</head>

<body>
    @include('layout.navbar')

    @yield('content')


<!---<script src="js/app.js"></script>---->
</body>

</html>
