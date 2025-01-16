<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" media="all" rel="stylesheet"
        type="text/css" />
    <script src="{{ asset('script/script.js') }}" defer></script>
    <title>Bintang Cendekia</title>
</head>

<body>
    <!-- Include Header -->
    @include('layout.header')

    <!-- Main Content -->
    <div id="Body">
        @yield('content')
    </div>

    <!-- Include Footer -->
    @include('layout.footer')
</body>

</html>
