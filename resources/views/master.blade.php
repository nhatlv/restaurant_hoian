<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <meta id="token" name="token" content="{{ csrf_token() }}">
    <title>Leaff Restaurant Theme</title>

    <!-- CSS -->
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">

    <!-- Font Awesome CSS -->
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" media="screen">

    <!-- Elegant icons CSS -->
    <link href="{{ asset('/css/simple-line-icons.css') }}" rel="stylesheet" media="screen">

    <!--[if lte IE 7]>
    <script src="{{ asset('/js/icons-lte-ie7.js')}}"></script>
    <![endif]-->

    <!-- Magnific-popup lightbox -->
    <link href="{{ asset('/css/magnific-popup.css') }}" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="{{ asset('/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet">

    <!-- Animate css -->
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet">

    <!-- Time and Date piker CSS -->
    <link href="{{ asset('/css/jquery.timepicker.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('/css/datepicker.css') }}" rel="stylesheet" media="screen">

    <!-- Custom styles CSS -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" media="screen">
</head>
<body>

<!-- Preloader -->

<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

{{--@include('header_section')--}}
{{--@yield('content_section')--}}
{{--@include('footer_section')--}}

<!-- Navigation start -->
@include('navigate')
        <!-- Navigation end -->

<!-- Home start -->
@include('slider')
        <!-- Home end -->

@yield('content_section')

        <!-- Footer start -->
@include('footer')
        <!-- Footer end -->

<!-- Scroll-up -->

<div class="scroll-up">
    <a href="#totop"><i class="fa fa-angle-double-up"></i></a>
</div>

<!-- Javascript files -->
<script src="{{ asset('/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{ asset('/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Use for slideshow background -->
<script src="{{ asset('/js/jquery.backstretch.min.js')}}"></script>

<!-- Use for video background -->

<!-- Date and time picker -->
<script src="{{ asset('/js/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('/js/jquery.datepair.min.js')}}"></script>
<script src="{{ asset('/js/jquery.timepicker.min.js')}}"></script>
<script src="{{ asset('/js/jqBootstrapValidation.js')}}"></script>

<!-- Other -->
<script src="{{ asset('/js/jquery.matchHeight-min.js')}}"></script>
<script src="{{ asset('/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{ asset('/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('/js/jquery.fitvids.js')}}"></script>
<script src="{{ asset('/js/smoothscroll.js')}}"></script>
<script src="{{ asset('/js/wow.min.js')}}"></script>

<!-- Custom scripts -->
<script src="{{ asset('/js/custom.js')}}"></script>
</body>

</html>