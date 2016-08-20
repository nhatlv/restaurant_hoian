@extends('master')
@section('content_section')

        <!-- About start -->
@include('home.about')
        <!-- About end -->

<!-- Callout section start -->
@include('home.callout')
        <!-- Callout section end -->

<!-- Dishes start -->
@include('home.recommend')
        <!-- Dishes end -->

<!-- Callout section start -->
@include('home.callout2')
        <!-- Callout section end -->

<!-- Popular start -->
@include('home.popular')
        <!-- Popular end -->

<!-- Callout section start -->
@include('home.callout3')
        <!-- Callout section end -->

<!-- Services start -->
@include('home.services')
        <!-- Services end -->

<!-- Gallery start -->
@include('home.gallery')
        <!-- Gallery end -->

<!-- Reservations start -->
@include('home.reservations')
        <!-- Reservations end -->

<!-- Twitter start -->
@include('home.twitter')
        <!-- Twitter end -->

<!-- Subscribe start -->
@include('home.subscribe')
        <!-- Subscribe end -->
@endsection

