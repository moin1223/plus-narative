<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="row">
        <div class=" col-md-2 sidebar" id="side_nav">
            <div class="header_box">
                <h1 class="pt-5 ps-5">PlusNarrative</h1>
            </div>
            <ul class="list-unstyle pt-4 ps-5">
                <li><a href="{{route('user.index')}}" class="text-decoration-none text-light">Users</a></li>
                <li><a href="" class="text-decoration-none text-light mt-5">Pages</a></li>
            </ul>


        </div>

        <div class="col-md-10 content">
            @yield('content')
        </div>

    </div>
</body>

</html>
