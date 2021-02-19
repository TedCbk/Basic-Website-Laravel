<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Acme</title>
</head>
<body>

    @include('inc.navbar')
    
    <div class="container">
        @if(Request::is('/'))
        @include('inc.showcase')
        @endif
    <div class="row mt-2">
        <div class="col-md-8">
            @include('inc.messages')
            @yield('content')
        </div>
        <div class="col-md-4">
            @include('inc.sidebar')
        </div>
    </div>
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright 2021 &copy; Acme</p>
    </footer>

    
    
</body>
</html>