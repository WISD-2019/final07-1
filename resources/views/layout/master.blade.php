<!DOCTYPE html>
<html lang="en">
<style>



    html {
        min-height: 100%; /* 非常重要 */
        position: relative;
    }

    body {
        /* Margin bottom by footer height */
        margin-bottom: 80px;
    }

    footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 80px;
    }
</style>


<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>@yield('title')</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('/img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('/style.css')}}">

</head>

<body>
@include('layout.partials.navigation')

@yield('content')

@include('layout.partials.footer')
<!-- ##### Footer Area End ##### -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="{{asset('/js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('/js/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<!-- Plugins js -->
<script src="{{asset('/js/plugins.js')}}"></script>
<!-- Classy Nav js -->
<script src="{{asset('/js/classy-nav.min.js')}}"></script>
<!-- Active js -->
<script src="{{asset('/js/active.js')}}"></script>
</body>

</html>