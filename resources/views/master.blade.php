<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{!! asset('css/ripples.min.css')!!}">
    <link rel="stylesheet" href="{!! asset('css/bootstrap-material-design.css') !!}">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/mystyle.css') !!}">
    <script src="{!! asset('js/jquery-3..3.1.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('js/material.min.js') !!}"></script>
    <script src="{!! asset('js/ripples.min.js') !!}"></script>
    <script>
        $(document).ready(function () {
            $.material.init();
            $('.navbar .nav li').click(function(){
               $('li').removeClass('active');
               $(this).addClass('active');
            });
        });
    </script>
</head>
<body>
    @include('shared.navbar')
    @yield('content')

</body>
</html>