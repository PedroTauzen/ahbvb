<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHBVB</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" />
</head>

<body>
    @include('partials.header')

    <main>
        @hasSection('content')
        @yield('content')
        @else
        {{ $slot ?? '' }}
        @endif
    </main>

</body>

</html>