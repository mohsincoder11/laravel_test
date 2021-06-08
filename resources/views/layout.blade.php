<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="{{asset('public/assets/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/fonts/bootstrap-font/bootstrap-icons.css')}}" rel="stylesheet">

    
    @yield('css')
    <title>The Kitchen!</title>

    <style>

    </style>
</head>

<body>

   @yield('content')
    <!-- ===== Bootstrap Bundle with Popper ===== -->
    <script type="text/javascript" src="{{asset('public/assets/assets/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('public/assets/assets/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- owl carousel -->
   

   @yield('js')


</body>

</html>