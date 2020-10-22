<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdcLikmi</title>
    <link href="{{ asset('bootstrap_4_1_3/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" >
    </head>
    <body>
        <div class="container">
            @yield('main')
        </div>
        @yield('footer')
        <script src="{{ asset('js/jquery_3_4_1.min.js') }}"></script>
        <script src="{{ asset('bootstrap_4_1_3/js/bootstrap.min.js') }}"></script>
    </body>
</html>
